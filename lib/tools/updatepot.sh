#!/bin/bash

pagespath=../../pages
potfile=../po/www.pot

# Rebuild the pot file
files=$(find $pagespath -name "*.php" -printf "%P ")
xgettext -kR_ -kE_ -L php --package-name www.xfce.org \
        --msgid-bugs-address http://bugzilla.xfce.org -o $potfile -D $pagespath $files
sed -e 's/charset=CHARSET/charset=UTF-8/' -i $potfile
