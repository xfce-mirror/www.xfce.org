#!/bin/bash
# Build pipeline for www.xfce.org Hugo site
#
# Default:       generate translated content (po4a) → i18n JSON → stubs → hugo
# --update-po:   also extract UI strings (POT) → merge into PO → update content PO

set -e
REPO_ROOT="$(cd "$(dirname "$0")" && pwd)"
UPDATE_PO=false
if [ "$1" = "--update-po" ]; then
  UPDATE_PO=true
fi

if $UPDATE_PO; then
  echo "==> Extracting UI strings from templates..."
  python3 "$REPO_ROOT/scripts/extract-ui-pot.py"

  echo "==> Merging UI POT into PO files..."
  for po in "$REPO_ROOT/po"/ui.*.po; do
    msgmerge --quiet --update --backup=none --no-wrap "$po" "$REPO_ROOT/po/ui.pot"
  done

  echo "==> Updating POT and PO files from content..."
  po4a "$REPO_ROOT/po4a.cfg"
else
  echo "==> Generating translated content files..."
  po4a --no-update "$REPO_ROOT/po4a.cfg"
fi

echo "==> Converting PO files to Hugo i18n JSON..."
python3 "$REPO_ROOT/scripts/po2hugo.py"

echo "==> Fixing tight lists in translated files..."
python3 "$REPO_ROOT/scripts/fix-tight-lists.py"

echo "==> Generating language stubs..."
mkdir -p "$REPO_ROOT/generated/about/news" "$REPO_ROOT/generated/download/changelogs" "$REPO_ROOT/generated/projects"
for po in "$REPO_ROOT/po"/ui.*.po; do
  lang="$(basename "$po" .po)"; lang="${lang#ui.}"
  stub="$REPO_ROOT/generated/about/credits.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Credits\"\nlayout: \"credits\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/about/screenshots.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Screenshots\"\nlayout: \"screenshots\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/about/news/_index.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"News\"\nlayout: \"news\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/download/_index.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Download\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/projects/_index.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Projects\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/download/changelogs/_index.$lang.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Changelogs\"\nhasToc: true\n---\n" > "$stub"
done

# Generate changelog page stubs for all languages (full copy — changelogs aren't translated)
for md in "$REPO_ROOT/content/download/changelogs"/[0-9]*.md; do
  [ -f "$md" ] || continue
  base="$(basename "$md" .md)"
  for po in "$REPO_ROOT/po"/ui.*.po; do
    lang="$(basename "$po" .po)"; lang="${lang#ui.}"
    stub="$REPO_ROOT/generated/download/changelogs/$base.$lang.md"
    [ -f "$stub" ] || cp "$md" "$stub"
  done
done

echo "==> Checking language translation thresholds..."
python3 "$REPO_ROOT/scripts/check-lang-threshold.py"

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT"

echo "==> Done. Output in $REPO_ROOT/public/"
