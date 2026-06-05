#!/bin/bash
# Build pipeline for www.xfce.org Hugo site
#
# Default:       generate translated content (hugo-gettext) → i18n JSON → stubs → hugo
# --update-po:   also extract UI strings (POT) → merge into PO → extract content POT

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

  echo "==> Extracting content POT with hugo-gettext..."
  hugo-gettext extract -f "$REPO_ROOT/hugo-gettext.toml" "$REPO_ROOT/po"

  echo "==> Merging content POT into PO files..."
  for po in "$REPO_ROOT/po"/content.*.po; do
    msgmerge --quiet --update --backup=none --no-wrap "$po" "$REPO_ROOT/po/content.pot"
  done
fi

echo "==> Compiling content PO files..."
rm -rf "$REPO_ROOT/locale"
mkdir -p "$REPO_ROOT/locale"
for po in "$REPO_ROOT/po"/content.*.po; do
  lang="$(basename "$po" .po)"; lang="${lang#content.}"
  mkdir -p "$REPO_ROOT/locale/$lang/LC_MESSAGES"
  msgfmt -o "$REPO_ROOT/locale/$lang/LC_MESSAGES/content.mo" "$po"
done

echo "==> Generating translated content files..."
hugo-gettext generate -f "$REPO_ROOT/hugo-gettext.toml" --keep-locale

echo "==> Cleaning up locale directory..."
rm -rf "$REPO_ROOT/locale"

echo "==> Converting PO files to Hugo i18n JSON..."
python3 "$REPO_ROOT/scripts/po2hugo.py"

echo "==> Generating language stubs..."
for po in "$REPO_ROOT/po"/ui.*.po; do
  lang="$(basename "$po" .po)"; lang="${lang#ui.}"
  mkdir -p "$REPO_ROOT/generated/$lang/about/news" "$REPO_ROOT/generated/$lang/download/changelogs" "$REPO_ROOT/generated/$lang/projects"
  stub="$REPO_ROOT/generated/$lang/about/credits.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Credits\"\nlayout: \"credits\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/$lang/about/screenshots.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Screenshots\"\nlayout: \"screenshots\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/$lang/about/news/_index.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"News\"\nlayout: \"news\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/$lang/download/_index.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Download\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/$lang/projects/_index.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Projects\"\nhasToc: true\n---\n" > "$stub"
  stub="$REPO_ROOT/generated/$lang/download/changelogs/_index.md"
  [ -f "$stub" ] || printf -- "---\ntitle: \"Changelogs\"\nhasToc: true\n---\n" > "$stub"

  # Changelog page stubs (full copy — changelogs aren't translated)
  for md in "$REPO_ROOT/content/download/changelogs"/[0-9]*.md; do
    [ -f "$md" ] || continue
    base="$(basename "$md" .md)"
    stub="$REPO_ROOT/generated/$lang/download/changelogs/$base.md"
    [ -f "$stub" ] || cp "$md" "$stub"
  done
done

# Because using Hugo's resources.GetRemote fail in the docker container
echo "==> Fetching blog feed..."
mkdir -p "$REPO_ROOT/generated/assets"
curl -sf "https://blog.xfce.org/feed/" -o "$REPO_ROOT/generated/assets/blogfeed.xml"

echo "==> Checking language translation thresholds..."
python3 "$REPO_ROOT/scripts/check-lang-threshold.py"

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT"

echo "==> Done. Output in $REPO_ROOT/public/"
