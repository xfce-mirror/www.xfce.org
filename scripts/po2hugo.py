#!/usr/bin/env python3
"""Convert PO files to Hugo i18n JSON files.

Run from repo root: python3 scripts/po2hugo.py
Reads:  po/ui.*.po
Writes: generated/i18n/<lang>.json
"""

import json
import re
import sys
from pathlib import Path
import polib


def convert_printf(s: str) -> str:
    """Replace PHP printf format specifiers with Hugo i18n Go template vars."""
    def replace_numbered(m: re.Match) -> str:
        n, spec = m.group(1), m.group(2).lower()
        t = 's' if spec == 's' else 'd' if spec in ('d', 'i', 'u') else 'f'
        return '{{ .' + t + n + ' }}'

    s = re.sub(r'%(\d+)\$([sdiufS])', replace_numbered, s)

    counters: dict[str, int] = {}

    def replace_positional(m: re.Match) -> str:
        spec = m.group(1).lower()
        t = 's' if spec == 's' else 'd' if spec in ('d', 'i', 'u') else 'f'
        counters[t] = counters.get(t, 0) + 1
        return '{{ .' + t + str(counters[t]) + ' }}'

    s = re.sub(r'%([sdiufS])', replace_positional, s)
    return s


def write_json(translations: dict, out_path: Path) -> None:
    nested = {}
    for key, value in translations.items():
        if isinstance(value, dict):
            nested[key] = value
        else:
            nested[key] = {'translation': value}
    with open(out_path, 'w', encoding='utf-8') as f:
        json.dump(nested, f, ensure_ascii=False, indent=2, sort_keys=True)
        f.write('\n')


def build_en_source(po_files: list[Path]) -> dict:
    """Collect all unique msgids across all PO files to build English source."""
    strings: dict[str, object] = {}

    for po_path in po_files:
        po = polib.pofile(str(po_path))
        for entry in po:
            if entry.obsolete or not entry.msgid or entry.msgid in strings:
                continue
            if entry.msgid_plural:
                strings[entry.msgid] = {
                    'one': convert_printf(entry.msgid),
                    'other': convert_printf(entry.msgid_plural),
                }
            else:
                strings[entry.msgid] = convert_printf(entry.msgid)

    return strings


def convert_po(po_path: Path, out_path: Path) -> None:
    po = polib.pofile(str(po_path))
    translations: dict[str, object] = {}

    for entry in po:
        if entry.obsolete or not entry.msgid or 'fuzzy' in entry.flags:
            continue

        if entry.msgid_plural:
            one = entry.msgstr_plural.get(0, '') or entry.msgstr_plural.get('0', '')
            other = entry.msgstr_plural.get(1, '') or entry.msgstr_plural.get('1', '')
            if one or other:
                translations[entry.msgid] = {
                    'one': convert_printf(one) if one else '',
                    'other': convert_printf(other) if other else '',
                }
        elif entry.msgstr:
            translations[entry.msgid] = convert_printf(entry.msgstr)

    write_json(translations, out_path)
    print(f'  {po_path.name:12} → {out_path.name}  ({len(translations)} strings)')


def main() -> None:
    repo_root = Path(__file__).parent.parent
    po_dir = repo_root / 'po'
    i18n_dir = repo_root / 'generated' / 'i18n'
    i18n_dir.mkdir(parents=True, exist_ok=True)

    po_files = sorted(po_dir.glob('ui.*.po'))
    if not po_files:
        print('No PO files found!', file=sys.stderr)
        sys.exit(1)

    print(f'Converting {len(po_files)} PO files → {i18n_dir}')

    en_strings = build_en_source(po_files)
    write_json(en_strings, i18n_dir / 'en.json')
    print(f'  (source)     → en.json  ({len(en_strings)} strings)')

    for po_path in po_files:
        hugo_lang = po_path.stem.removeprefix('ui.').replace('_', '-').lower()
        convert_po(po_path, i18n_dir / f'{hugo_lang}.json')

    print('\nDone.')


if __name__ == '__main__':
    main()
