#!/bin/bash
# This script generate the $lang.mo file which can be read by PHP gettext
# The .po and .pot are updated by txcron.sh, with transifex

root=../..
pofiles=$root/lib/po
localedir=$root/lib/locale

for po in $(find $pofiles -name "*.po")
do
  # Compile catalog
  path=$localedir/$lang/LC_MESSAGES
  mkdir -p $path
  msgfmt --no-hash -o $path/www.mo $po
done
