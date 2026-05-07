#!/bin/bash
# Build pipeline for www.xfce.org Hugo site
# 1. Convert PO translation files to Hugo i18n YAML
# 2. Build static site with Hugo

set -e
REPO_ROOT="$(cd "$(dirname "$0")" && pwd)"

echo "==> Converting PO files to Hugo i18n YAML..."
python3 "$REPO_ROOT/scripts/po2hugo.py"

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT" --destination "$REPO_ROOT/dist"

echo "==> Done. Output in $REPO_ROOT/dist/"
