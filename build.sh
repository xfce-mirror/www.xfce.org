#!/bin/bash
# Build pipeline for www.xfce.org Hugo site
# 1. Convert PO translation files to Hugo i18n YAML
# 2. Generate translated content markdown files via po4a
# 3. Build static site with Hugo

set -e
REPO_ROOT="$(cd "$(dirname "$0")" && pwd)"

echo "==> Converting PO files to Hugo i18n YAML..."
python3 "$REPO_ROOT/scripts/po2hugo.py"

echo "==> Generating translated content files..."
po4a --no-update "$REPO_ROOT/po4a.cfg"

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT" --destination "$REPO_ROOT/dist"

echo "==> Done. Output in $REPO_ROOT/dist/"
