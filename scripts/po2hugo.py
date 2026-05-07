#!/usr/bin/env python3
"""Convert PO files to Hugo i18n YAML files.

Run from repo root: python3 scripts/po2hugo.py
Reads:  lib/po/*.po
Writes: hugo/i18n/<lang>.yaml  (and hugo/i18n/en.yaml as English source)

All entries use Hugo's explicit nested format:
  "Key":
    translation: "Value"
This avoids conflicts with Hugo's reserved structural keys (translation, one,
other, few, many, zero) regardless of capitalisation, because Hugo only treats
those names as reserved when they appear as *nested* subkeys, not as entry IDs.
Plural entries use one:/other: subkeys as Hugo expects.
"""

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


def yaml_str(s: str) -> str:
    """Serialize a string as a YAML double-quoted scalar."""
    s = s.replace('\\', '\\\\')
    s = s.replace('"', '\\"')
    s = s.replace('\n', '\\n')
    s = s.replace('\r', '\\r')
    s = s.replace('\t', '\\t')
    return f'"{s}"'


def write_yaml(translations: dict, out_path: Path) -> None:
    """Write translations using Hugo's explicit nested format.

    Simple strings:
      "Key":
        translation: "Value"

    Plural forms:
      "Key":
        one: "Singular"
        other: "Plural"
    """
    with open(out_path, 'w', encoding='utf-8') as f:
        for key in sorted(translations.keys()):
            value = translations[key]
            f.write(f'{yaml_str(key)}:\n')
            if isinstance(value, dict):
                for form, text in value.items():
                    f.write(f'  {form}: {yaml_str(text)}\n')
            else:
                f.write(f'  translation: {yaml_str(value)}\n')


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

    write_yaml(translations, out_path)
    print(f'  {po_path.name:12} → {out_path.name}  ({len(translations)} strings)')


def main() -> None:
    repo_root = Path(__file__).parent.parent
    po_dir = repo_root / 'legacy' / 'lib' / 'po'
    i18n_dir = repo_root / 'i18n'
    i18n_dir.mkdir(parents=True, exist_ok=True)

    po_files = sorted(po_dir.glob('*.po'))
    if not po_files:
        print('No PO files found!', file=sys.stderr)
        sys.exit(1)

    print(f'Converting {len(po_files)} PO files → {i18n_dir}')

    en_strings = build_en_source(po_files)
    write_yaml(en_strings, i18n_dir / 'en.yaml')
    print(f'  (source)     → en.yaml  ({len(en_strings)} strings)')

    for po_path in po_files:
        convert_po(po_path, i18n_dir / f'{po_path.stem}.yaml')

    print('\nDone.')


if __name__ == '__main__':
    main()
