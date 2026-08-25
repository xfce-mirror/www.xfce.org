#!/usr/bin/env python3
"""Print the languages below the translation threshold, comma-separated.

build.sh feeds the result to Hugo as HUGO_DISABLELANGUAGES, so an
under-translated language is not built at all. Percentages go to stderr so they
still show up in the build log.
"""

import sys
from pathlib import Path

import polib

THRESHOLD = 50


def translated_pct(po_dir: Path, lang: str) -> float:
    translated = total = 0
    for domain in ('strings', 'content'):
        path = po_dir / f'{domain}.{lang}.po'
        if not path.exists():
            continue
        po = polib.pofile(str(path))
        total += sum(1 for e in po if e.msgid)
        translated += len(po.translated_entries())
    return translated / total * 100 if total else 0.0


def main() -> None:
    po_dir = Path(__file__).parent.parent / 'po'
    langs = sorted({p.name.split('.')[1] for p in po_dir.glob('*.*.po')})

    disabled = []
    for lang in langs:
        pct = translated_pct(po_dir, lang)
        if pct < THRESHOLD:
            disabled.append(lang)
            print(f'  {lang}: {pct:.0f}% translated — disabled', file=sys.stderr)

    print(f'  ({len(disabled)} of {len(langs)} languages below {THRESHOLD}%)'
          if disabled else f'  all {len(langs)} languages above {THRESHOLD}%',
          file=sys.stderr)
    # Hugo lowercases language keys, so pt_BR is disabled as pt_br
    print(','.join(lang.lower() for lang in disabled))


if __name__ == '__main__':
    main()
