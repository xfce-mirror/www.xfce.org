#!/usr/bin/env python3
"""Seed content PO files from legacy UI PO files.

Run once after adding a new content page to po4a.cfg and extracting the POT:
  po4a --no-translations po4a.cfg
  python3 scripts/seed-content-po.py

Handles three lookup strategies for each entry:
  1. Exact msgid match (simple strings, headings)
  2. Stripped trailing-newline match (po4a no-wrap entries append \\n)
  3. HTML-equivalent match: converts markdown [text](url) → <a href="url">text</a>
     then looks up in legacy PO. Useful for strings migrated from HTML to markdown.
     The matched legacy msgstr is then converted back to markdown for output.
"""

import re
import sys
from pathlib import Path
import polib

REPO_ROOT = Path(__file__).parent.parent
PO_DIR = REPO_ROOT / 'po'
LEGACY_PO = REPO_ROOT / 'legacy' / 'lib' / 'po'

LANG_MAP = {
    'en-AU': 'en_AU',
    'en-GB': 'en_GB',
    'fa-IR': 'fa_IR',
    'pt-BR': 'pt_BR',
    'zh-CN': 'zh_CN',
    'zh-TW': 'zh_TW',
}


def strip_html_attrs(text: str) -> str:
    """Normalize HTML links: strip all attributes except href."""
    return re.sub(r'<a\s+href="([^"]*)"[^>]*>', r'<a href="\1">', text)


def md_to_html(text: str) -> str:
    """Convert markdown links/emphasis to HTML for legacy PO lookup."""
    text = re.sub(r'\[([^\]]+)\]\(([^)]+)\)', r'<a href="\2">\1</a>', text)
    # **WORD**: → <strong>WORD:</strong>  (colon moves back inside tag)
    text = re.sub(r'\*\*([^*]+)\*\*:', r'<strong>\1:</strong>', text)
    text = re.sub(r'\*\*([^*]+)\*\*', r'<strong>\1</strong>', text)
    return text


def html_to_md(text: str) -> str:
    """Convert HTML links/emphasis to markdown in translated strings."""
    text = re.sub(r'<a\s+href="([^"]*)"[^>]*>([^<]*)</a>', r'[\2](\1)', text)
    # <strong>WORD:</strong> → **WORD**:  (colon moves outside tag)
    text = re.sub(r'<strong>([^<]*?):</strong>', r'**\1**:', text)
    text = re.sub(r'<strong>([^<]*?)</strong>', r'**\1**', text)
    return text


def build_lookup(po_path: Path) -> dict[str, str]:
    """Build msgid → msgstr map with raw, stripped, and HTML-normalized keys."""
    po = polib.pofile(str(po_path))
    lookup: dict[str, str] = {}
    for entry in po:
        if entry.msgstr and 'fuzzy' not in entry.flags:
            raw = entry.msgid
            lookup[raw] = entry.msgstr
            lookup[raw.rstrip('\n')] = entry.msgstr
            # Normalized HTML: strip extra attrs for class="external" etc.
            normalized = strip_html_attrs(raw)
            lookup[normalized] = entry.msgstr
            lookup[normalized.rstrip('\n')] = entry.msgstr
    return lookup


def find_translation(msgid: str, lookup: dict[str, str]) -> str:
    """Look up translation using exact, stripped-newline, and HTML-equivalent strategies."""
    stripped = msgid.rstrip('\n')

    # Strategy 1 & 2: exact and stripped
    for key in (msgid, stripped):
        if key in lookup:
            return lookup[key]

    # Strategy 3: markdown → HTML conversion for strings migrated from HTML to markdown
    html_equiv = strip_html_attrs(md_to_html(stripped))
    if html_equiv in lookup:
        msgstr = html_to_md(lookup[html_equiv])
        return msgstr

    return ''


def seed_po(pot_path: Path, lang: str, legacy_lang: str) -> None:
    compendium = LEGACY_PO / f'{legacy_lang}.po'
    if not compendium.exists():
        print(f'  skip {lang}: no legacy PO found')
        return

    pot = polib.pofile(str(pot_path))
    lookup = build_lookup(compendium)

    out = polib.POFile()
    out.metadata = pot.metadata.copy()
    out.metadata['Language'] = lang

    translated = 0
    for entry in pot:
        msgstr = find_translation(entry.msgid, lookup)
        if msgstr:
            # Mirror trailing newline: po4a no-wrap msgids end with \n; msgstr must match
            if entry.msgid.endswith('\n') and not msgstr.endswith('\n'):
                msgstr += '\n'
            translated += 1
        out_entry = polib.POEntry(
            msgid=entry.msgid,
            msgstr=msgstr,
            comment=entry.comment,
            tcomment=entry.tcomment,
            occurrences=entry.occurrences,
            flags=entry.flags,
        )
        out.append(out_entry)

    out_path = PO_DIR / f'{pot_path.stem}.{lang}.po'
    out.save(str(out_path))
    print(f'  {lang:8} → {out_path.name}  ({translated}/{len(pot)} strings)')


def main() -> None:
    pots = sorted(PO_DIR.glob('*.pot'))
    if not pots:
        print('No POT files in po/. Run: po4a --no-translations po4a.cfg', file=sys.stderr)
        sys.exit(1)

    for pot in pots:
        print(f'Seeding {pot.name}:')
        for po_file in sorted(LEGACY_PO.glob('*.po')):
            legacy_lang = po_file.stem
            hugo_lang = next((h for h, l in LANG_MAP.items() if l == legacy_lang),
                             legacy_lang)
            seed_po(pot, hugo_lang, legacy_lang)

    print('\nDone. Commit po/*.po and run po4a po4a.cfg to generate translated content.')


if __name__ == '__main__':
    main()
