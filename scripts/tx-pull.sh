#!/bin/bash
# Pull translations from Transifex and commit each changed PO file on its own

set -euo pipefail

MIN_PERC=50

is_new() {
  ! git ls-files --error-unmatch "$1" &>/dev/null
}

# Throw away a pulled file: delete it if new, otherwise restore the committed one
discard() {
  if is_new "$1"; then
    rm -f "$1"
  else
    git checkout -- "$1"
  fi
}

# e.g. "95 translated messages, 2 fuzzy translations, 3 untranslated messages."
stats() {
  msgfmt --statistics -o /dev/null "$1" 2>&1
}

# Percentage of translated messages, computed from stats
perc() {
  stats "$1" | awk '{
    for (i = 1; i < NF; i++) {
      if ($i ~ /^[0-9]+$/) {
        total += $i
        if ($(i + 1) == "translated") translated = $i
      }
    }
    print total ? int(100 * translated / total) : 0
  }'
}

tx pull --all --minimum-perc=$MIN_PERC --force

for po in po/strings.*.po po/content.*.po; do
  if ! msgfmt --check -o /dev/null "$po"; then
    echo "Invalid, discarding: $po"
    discard "$po"
  # tx's --minimum-perc is not reliable, so check new languages
  elif is_new "$po" && [ "$(perc "$po")" -lt $MIN_PERC ]; then
    echo "Below ${MIN_PERC}%, discarding: $po"
    discard "$po"
  fi
done

changes=$(git status --porcelain po/*.po)
if [ -z "$changes" ]; then
  echo "No translation changes"
  exit 0
fi

git config user.name "Transifex Bot"
git config user.email "noreply@xfce.org"
git remote set-url origin \
  "https://gitlab-ci-token:${GIT_PUSH_TOKEN}@gitlab.xfce.org/${CI_PROJECT_PATH}.git"

while read -r status po; do
  file=${po#po/}          # po/strings.pt_BR.po -> strings.pt_BR.po
  resource=${file%%.*}    #                     -> strings
  lang=${file#*.}         #                     -> pt_BR.po
  lang=${lang%.po}        #                     -> pt_BR

  if [ "$status" = "??" ]; then
    action="Add new"
  else
    action="Update"
  fi

  git add "$po"
  git commit --quiet --author "Anonymous <noreply@xfce.org>" \
    -m "I18n: ${action} translation ${lang} (${resource}, $(perc "$po")%)." \
    -m "$(stats "$po")" \
    -m "Transifex (https://explore.transifex.com/xfce/)." \
    -- "$po"
done <<< "$changes"

git push origin HEAD:master
