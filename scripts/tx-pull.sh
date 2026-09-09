#!/bin/bash
set -euo pipefail

tx pull --all --minimum-perc=50 --force

# Validate, revert invalid PO files
for po in po/strings.*.po po/content.*.po; do
  if ! msgfmt --check --output-file=/dev/null "$po" 2>&1; then
    echo "INVALID: $po"
    if git ls-files --error-unmatch "$po" &>/dev/null; then
      git checkout -- "$po"
    else
      rm -f "$po"
    fi
  fi
done

# Exit early if nothing changed
if [ -z "$(git status --porcelain po/*.po)" ]; then
  echo "No translation changes"
  exit 0
fi

# Commit per file (matches txcron behavior)
git config user.name "Transifex Bot"
git config user.email "noreply@xfce.org"
git remote set-url origin \
  "https://gitlab-ci-token:${GIT_PUSH_TOKEN}@gitlab.xfce.org/${CI_PROJECT_PATH}.git"

git status --porcelain po/*.po | while read status f; do
  base=$(basename "$f" .po)
  lang=${base#*.}

  stats=$(msgfmt -o /dev/null --statistics "$f" 2>&1)

  eval "tr=0 fz=0 ut=0 $(echo "$stats" | sed -e 's/[,\.]//g' \
    -e 's/\([0-9]\+\) translated messages\?/tr=\1/' \
    -e 's/\([0-9]\+\) fuzzy translations\?/fz=\1/' \
    -e 's/\([0-9]\+\) untranslated messages\?/ut=\1/')"
  total=$((tr + fz + ut))
  perc=$((100 * tr / total))

  if [ "$status" = "??" ]; then
    msgtitle="Add new"
    git add "$f"
  else
    msgtitle="Update"
  fi

  git commit -m "I18n: ${msgtitle} translation ${lang} (${perc}%)." \
             -m "$stats" \
             -m "Transifex (https://explore.transifex.com/xfce/)." \
             --author "Anonymous <noreply@xfce.org>" --quiet "$f"
done

git push origin HEAD:master
