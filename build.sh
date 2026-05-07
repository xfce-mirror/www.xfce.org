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

echo "==> Generating language stubs..."
for po in "$REPO_ROOT/legacy/lib/po"/*.po; do
  lang="$(basename "$po" .po)"
  stub="$REPO_ROOT/generated/about/credits.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Credits\"\nlayout: \"credits\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/about/screenshots.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Screenshots\"\nlayout: \"screenshots\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/about/news/_index.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"News\"\nlayout: \"news\"\nhasToc: true\n---\n" > "$stub"
done

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT" --destination "$REPO_ROOT/dist"

echo "==> Done. Output in $REPO_ROOT/dist/"
