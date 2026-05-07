#!/usr/bin/env python3
"""Remove blank lines between consecutive list items in po4a-generated markdown files.

po4a separates each translated bullet as an independent block, inserting a blank
line between items. This turns tight lists into loose lists. Run after po4a.
"""

import re
import glob
from pathlib import Path

REPO_ROOT = Path(__file__).parent.parent

LIST_ITEM = re.compile(r'^[-*]|\d+\. ', re.MULTILINE)

def fix_tight_lists(text: str) -> str:
    # Collapse blank lines between consecutive list items (- or * or 1.)
    return re.sub(r'(^(?:[-*]|\d+\.) .+)\n\n(?=(?:[-*]|\d+\.) )', r'\1\n', text, flags=re.MULTILINE)

def main() -> None:
    pattern = str(REPO_ROOT / 'generated' / '**' / '*.md')
    files = glob.glob(pattern, recursive=True)
    fixed = 0
    for path in files:
        text = Path(path).read_text()
        new_text = fix_tight_lists(text)
        if new_text != text:
            Path(path).write_text(new_text)
            fixed += 1
    print(f'Fixed tight lists in {fixed}/{len(files)} files.')

if __name__ == '__main__':
    main()
