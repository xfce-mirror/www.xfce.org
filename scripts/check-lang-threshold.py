#!/usr/bin/env python3
"""Disable languages below a combined translation threshold.

Removes generated i18n JSON and content files for under-translated languages
so Hugo won't render them.
"""

import glob
import os
import sys
from pathlib import Path

import polib

THRESHOLD = 50


def get_translation_pct(lang: str, po_dir: Path) -> tuple[int, int]:
    """Return (translated, total) across UI and content PO files."""
    translated = 0
    total = 0

    for prefix in ("ui", "content"):
        po_path = po_dir / f"{prefix}.{lang}.po"
        if not po_path.exists():
            continue
        po = polib.pofile(str(po_path))
        entries = [e for e in po if not e.obsolete and e.msgid]
        total += len(entries)
        translated += len(po.translated_entries())

    return translated, total


def remove_lang_files(lang: str, generated_dir: Path) -> int:
    """Remove all generated files for a language. Return count removed."""
    hugo_lang = lang.replace("_", "-").lower()
    count = 0

    json_path = generated_dir / "i18n" / f"{hugo_lang}.json"
    if json_path.exists():
        json_path.unlink()
        count += 1

    for md in generated_dir.rglob(f"*.{lang}.md"):
        md.unlink()
        count += 1

    return count


def main() -> None:
    repo_root = Path(__file__).parent.parent
    po_dir = repo_root / "po"
    generated_dir = repo_root / "generated"

    langs = set()
    for po_path in po_dir.glob("ui.*.po"):
        langs.add(po_path.stem.removeprefix("ui."))
    for po_path in po_dir.glob("content.*.po"):
        if po_path.name != "content.pot":
            langs.add(po_path.stem.removeprefix("content."))

    disabled = []
    for lang in sorted(langs):
        translated, total = get_translation_pct(lang, po_dir)
        if total == 0:
            continue
        pct = translated / total * 100
        if pct < THRESHOLD:
            removed = remove_lang_files(lang, generated_dir)
            disabled.append((lang, pct, removed))

    if disabled:
        for lang, pct, removed in disabled:
            print(f"  {lang}: {pct:.0f}% translated — disabled ({removed} files removed)")
        print(f"  ({len(disabled)} languages below {THRESHOLD}% threshold)")
    else:
        print(f"  All languages above {THRESHOLD}% threshold")


if __name__ == "__main__":
    main()
