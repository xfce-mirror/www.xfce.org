#!/bin/bash
# Build pipeline for www.xfce.org Hugo site
#
# Default:       compile PO → hugo-gettext generate (content + i18n strings) → stubs → hugo
# --update-po:   also extract po/strings.pot + po/content.pot and merge them into the PO files

set -e
REPO_ROOT="$(cd "$(dirname "$0")" && pwd)"
UPDATE_PO=false
if [ "$1" = "--update-po" ]; then
  UPDATE_PO=true
fi

if $UPDATE_PO; then
  echo "==> Extracting POT files with hugo-gettext..."
  # i18n/en.yaml -> po/strings.pot, content markdown -> po/content.pot
  hugo-gettext extract -f "$REPO_ROOT/hugo-gettext.toml" "$REPO_ROOT/po"

  echo "==> Pointing po/strings.pot at the templates that use each string..."
  python3 "$REPO_ROOT/scripts/ui-strings.py" --annotate

  echo "==> Merging POT into PO files..."
  for po in "$REPO_ROOT/po"/strings.*.po "$REPO_ROOT/po"/content.*.po; do
    domain="$(basename "$po")"; domain="${domain%%.*}"
    msgmerge --quiet --update --backup=none "$po" "$REPO_ROOT/po/$domain.pot"
  done
fi

echo "==> Checking UI strings..."
python3 "$REPO_ROOT/scripts/ui-strings.py" --check

echo "==> Compiling PO files..."
rm -rf "$REPO_ROOT/locale"
for po in "$REPO_ROOT/po"/strings.*.po "$REPO_ROOT/po"/content.*.po; do
  base="$(basename "$po" .po)"
  domain="${base%%.*}"; lang="${base#*.}"
  mkdir -p "$REPO_ROOT/locale/$lang/LC_MESSAGES"
  msgfmt -o "$REPO_ROOT/locale/$lang/LC_MESSAGES/$domain.mo" "$po"
done

echo "==> Generating translated content and UI strings..."
find "$REPO_ROOT/i18n" -type f ! -name 'en.yaml' -delete
hugo-gettext generate -f "$REPO_ROOT/hugo-gettext.toml" --keep-locale

echo "==> Cleaning up locale directory..."
rm -rf "$REPO_ROOT/locale"

echo "==> Generating language stubs..."
for po in "$REPO_ROOT/po"/strings.*.po; do
  lang="$(basename "$po" .po)"; lang="${lang#strings.}"
  mkdir -p "$REPO_ROOT/generated/$lang/about/news" "$REPO_ROOT/generated/$lang/download/changelogs" "$REPO_ROOT/generated/$lang/projects"

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
mkdir -p "$REPO_ROOT/assets"
curl -sf "https://blog.xfce.org/feed/" -o "$REPO_ROOT/assets/blogfeed.xml"

echo "==> Checking language translation thresholds..."
# under-translated languages are not built at all
HUGO_DISABLELANGUAGES="$(python3 "$REPO_ROOT/scripts/check-lang-threshold.py")"
export HUGO_DISABLELANGUAGES

echo "==> Building Hugo site..."
hugo --source "$REPO_ROOT" --cleanDestinationDir

echo "==> Done. Output in $REPO_ROOT/public/"
