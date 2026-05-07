#!/usr/bin/env python3
"""Strip untranslatable entries from content PO/POT files.

Removes entries that po4a extracts but should never be translated:
- Link reference definitions ([img]: //url)
- HTML comments (<!--more-->)
- Bare autolinks (<https://...>)
- Link-only headings ([project-name](url))

Uses line-by-line processing to preserve po4a's --wrap-po=newlines formatting.
"""

import glob
import os
import re

REPO_ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))


def should_skip(block):
    for line in block:
        if line.strip() == "#. type: Link reference":
            return True
        if line.startswith("msgid "):
            msgid = line[len("msgid "):].strip().strip('"')
            if msgid in (r"<!--more-->\n",):
                return True
            if re.match(r"<https?://[^>]+>\\n", msgid):
                return True
            if re.match(r"\[[^\]]+\]\([^)]+\)$", msgid):
                return True
    return False


def strip_entries(filepath):
    with open(filepath, "r", encoding="utf-8") as f:
        lines = f.readlines()

    out = []
    block = []
    removed = 0

    def flush_block():
        nonlocal removed
        if should_skip(block):
            removed += 1
        else:
            out.extend(block)

    for line in lines:
        if line.strip() == "":
            block.append(line)
            flush_block()
            block = []
        else:
            block.append(line)

    if block:
        flush_block()

    if removed:
        with open(filepath, "w", encoding="utf-8") as f:
            f.writelines(out)

    return removed


def main():
    total = 0
    pot = os.path.join(REPO_ROOT, "po", "content.pot")
    if os.path.exists(pot):
        n = strip_entries(pot)
        if n:
            print(f"  {os.path.basename(pot)}: removed {n} entries")
            total += n

    for po in sorted(glob.glob(os.path.join(REPO_ROOT, "po", "content.*.po"))):
        n = strip_entries(po)
        if n:
            print(f"  {os.path.basename(po)}: removed {n} entries")
            total += n

    if total:
        print(f"  Total: {total} untranslatable entries removed")
    else:
        print("  No untranslatable entries found")


if __name__ == "__main__":
    main()
