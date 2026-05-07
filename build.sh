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

echo "==> Fixing tight lists in translated files..."
python3 "$REPO_ROOT/scripts/fix-tight-lists.py"

echo "==> Generating credits stubs for all languages..."
CREDITS_LANGS="ar bg ca cs da de el es fa-IR fr gl he hu id it ja kk ko lt ms nb nl oc pl pt pt-BR ro ru sk sl sq sr sv th tr uk vi zh-CN zh-TW en-AU en-GB"
for lang in $CREDITS_LANGS; do
  stub="$REPO_ROOT/generated/about/credits.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Credits\"\nlayout: \"credits\"\nhasToc: true\n---\n" > "$stub"
done

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT" --destination "$REPO_ROOT/dist"

echo "==> Done. Output in $REPO_ROOT/dist/"
