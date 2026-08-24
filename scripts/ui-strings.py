#!/usr/bin/env python3
"""Keep templates and i18n/en.yaml in agreement, and point po/ui.pot at templates.

i18n/en.yaml is hand-maintained and is the source of truth for UI strings, so a
template asking for a key that isn't in it renders an empty string with no
error from Hugo. This turns that into a build failure naming the string.

    --check      templates and i18n/en.yaml agree (run on every build)
    --annotate   rewrite po/ui.pot references to point at the templates,
                 replacing hugo-gettext's "i18n/en.yaml:0" (run after extract)
"""

import argparse
import re
import subprocess
import sys
from pathlib import Path

import polib
import yaml

CALL = re.compile(r'i18n\s+"((?:[^"\\]|\\.)*)"')


def find_uses(layouts_dir: Path) -> dict[str, list[tuple[str, str]]]:
    """Map each i18n key to the [(file, line)] where templates ask for it."""
    uses: dict[str, list[tuple[str, str]]] = {}
    for path in sorted(layouts_dir.rglob('*.html')):
        rel = path.relative_to(layouts_dir.parent)
        for lineno, line in enumerate(path.read_text(encoding='utf-8').splitlines(), 1):
            for m in CALL.finditer(line):
                key = m.group(1).encode().decode('unicode_escape')
                uses.setdefault(key, []).append((str(rel), str(lineno)))
    return uses


def check(uses: dict, strings: dict) -> int:
    missing = sorted(set(uses) - set(strings))
    unused = sorted(set(strings) - set(uses))

    for key in missing:
        where = ', '.join(f'{f}:{n}' for f, n in uses[key][:3])
        print(f'  ERROR: no i18n/en.yaml entry for {key!r} (used at {where})', file=sys.stderr)
    for key in unused:
        print(f'  WARNING: i18n/en.yaml has {key!r} but no template uses it', file=sys.stderr)

    if missing:
        print(f'\n{len(missing)} string(s) used by templates but absent from i18n/en.yaml.',
              file=sys.stderr)
        print('Add them there as "<key>:" followed by an indented '
              '"other: <English text>", using {{ .s1 }}, {{ .s2 }} ... for anything '
              'the template passes in, then run ./build.sh --update-po.', file=sys.stderr)
        return 1

    print(f'  {len(uses)} UI strings, templates and i18n/en.yaml agree'
          + (f' ({len(unused)} unused)' if unused else ''))
    return 0


def annotate(uses: dict, strings: dict, pot_path: Path) -> None:
    # The msgid is the `other` value, never the key: templates call
    # "download-intro", translators see "Most distributions ship ...". Go back
    # through en.yaml to recover the key each msgid came from.
    key_of = {v['other']: k for k, v in strings.items()}

    pot = polib.pofile(str(pot_path))
    annotated = 0
    for entry in pot:
        if not entry.msgid:
            continue
        found = uses.get(key_of.get(entry.msgid, ''))
        if found:
            entry.occurrences = found
            annotated += 1
    pot.save(str(pot_path))
    # polib wraps reference comments differently from gettext; hand the file back
    # to msgcat so it matches what hugo-gettext wrote
    subprocess.run(['msgcat', '-o', str(pot_path), str(pot_path)], check=True)
    print(f'  {annotated} po/ui.pot entries pointed at templates')


def main() -> None:
    parser = argparse.ArgumentParser(description=__doc__,
                                     formatter_class=argparse.RawDescriptionHelpFormatter)
    parser.add_argument('--check', action='store_true', help='verify templates match i18n/en.yaml')
    parser.add_argument('--annotate', action='store_true', help='rewrite po/ui.pot references')
    args = parser.parse_args()
    if not (args.check or args.annotate):
        parser.error('pass --check and/or --annotate')

    repo_root = Path(__file__).parent.parent
    strings = yaml.safe_load((repo_root / 'i18n' / 'en.yaml').read_text(encoding='utf-8'))
    uses = find_uses(repo_root / 'layouts')

    if args.check and check(uses, strings) != 0:
        sys.exit(1)
    if args.annotate:
        annotate(uses, strings, repo_root / 'po' / 'ui.pot')


if __name__ == '__main__':
    main()
