#!/usr/bin/env python3
"""Strip 'Link reference' entries from content PO/POT files.

po4a extracts markdown link reference definitions (e.g. [img]: //url)
as translatable strings, but these are just image/asset URLs that should
never be translated. This script removes those entries.

Uses line-by-line processing to preserve po4a's --wrap-po=newlines formatting.
"""

import glob
import os
import sys

REPO_ROOT = os.path.dirname(os.path.dirname(os.path.abspath(__file__)))


def strip_linkrefs(filepath):
    with open(filepath, "r", encoding="utf-8") as f:
        lines = f.readlines()

    out = []
    block = []
    removed = 0

    def flush_block():
        nonlocal removed
        is_linkref = any(
            line.strip() == "#. type: Link reference" for line in block
        )
        if is_linkref:
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
        n = strip_linkrefs(pot)
        if n:
            print(f"  {os.path.basename(pot)}: removed {n} link reference(s)")
            total += n

    for po in sorted(glob.glob(os.path.join(REPO_ROOT, "po", "content.*.po"))):
        n = strip_linkrefs(po)
        if n:
            print(f"  {os.path.basename(po)}: removed {n} link reference(s)")
            total += n

    if total:
        print(f"  Total: {total} link reference entries removed")
    else:
        print("  No link reference entries found")


if __name__ == "__main__":
    main()
