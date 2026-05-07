#!/usr/bin/env python3
"""Extract i18n strings from Hugo templates and generate po/ui.pot.

Run from repo root: python3 scripts/extract-ui-pot.py
Reads:  layouts/**/*.html
Writes: po/ui.pot
"""

import re
import sys
from datetime import datetime, timezone
from pathlib import Path

import polib


SCREENSHOTS_VERSIONS = [
    "4.0", "4.2", "4.4", "4.6", "4.8",
    "4.10", "4.12", "4.14", "4.16", "4.18", "4.20",
]


def extract_strings(layouts_dir: Path) -> dict[str, list[str]]:
    """Return {msgid: [file:line, ...]} from all templates."""
    strings: dict[str, list[str]] = {}
    pattern = re.compile(r'i18n\s+"([^"]+)"')

    for html_path in sorted(layouts_dir.rglob("*.html")):
        rel = html_path.relative_to(layouts_dir.parent)
        with open(html_path, encoding="utf-8") as f:
            for lineno, line in enumerate(f, 1):
                for m in pattern.finditer(line):
                    msgid = m.group(1)
                    ref = f"{rel}:{lineno}"
                    strings.setdefault(msgid, []).append(ref)

    # Dynamic strings: i18n (printf "Xfce %s" $ver) in screenshots
    for ver in SCREENSHOTS_VERSIONS:
        msgid = f"Xfce {ver}"
        strings.setdefault(msgid, []).append("layouts/about/screenshots.html:0")

    return strings


def build_pot(strings: dict[str, list[str]], out_path: Path) -> None:
    pot = polib.POFile(wrapwidth=0)
    pot.metadata = {
        "Project-Id-Version": "www.xfce.org",
        "Report-Msgid-Bugs-To": "https://gitlab.xfce.org/websites/www.xfce.org/-/issues",
        "POT-Creation-Date": datetime.now(timezone.utc).strftime("%Y-%m-%d %H:%M%z"),
        "PO-Revision-Date": "YEAR-MO-DA HO:MI+ZONE",
        "Last-Translator": "",
        "Language-Team": "",
        "Language": "",
        "MIME-Version": "1.0",
        "Content-Type": "text/plain; charset=UTF-8",
        "Content-Transfer-Encoding": "8bit",
    }

    for msgid in sorted(strings):
        entry = polib.POEntry(
            msgid=msgid,
            msgstr="",
            occurrences=[(ref.rsplit(":", 1)[0], ref.rsplit(":", 1)[1]) for ref in strings[msgid]],
        )
        pot.append(entry)

    if out_path.exists():
        old = polib.pofile(str(out_path))
        old_ids = set(e.msgid for e in old)
        new_ids = set(e.msgid for e in pot)
        if old_ids == new_ids:
            print(f"po/ui.pot unchanged ({len(pot)} strings)")
            return

    pot.save(str(out_path))
    print(f"Extracted {len(pot)} strings → {out_path}")


def main() -> None:
    repo_root = Path(__file__).parent.parent
    layouts_dir = repo_root / "layouts"
    out_path = repo_root / "po" / "ui.pot"

    if not layouts_dir.is_dir():
        print(f"layouts/ not found at {layouts_dir}", file=sys.stderr)
        sys.exit(1)

    strings = extract_strings(layouts_dir)
    build_pot(strings, out_path)


if __name__ == "__main__":
    main()
