#!/bin/bash
# Only kept here for history, we don't need to use it anymore, this is done by the txcron.sh and transifex magic
exit 0

pagespath=../../pages
potfile=../po/www.pot

# Rebuild the pot file
files=$(find $pagespath -name "*.php" -printf "%P ")
xgettext -kR_ -kE_ -L php --package-name www.xfce.org --from-code=UTF-8 \
        --msgid-bugs-address https://bugzilla.xfce.org -o $potfile -D $pagespath $files
sed -e 's/charset=CHARSET/charset=UTF-8/' -i $potfile

# Regenerate the po files
cd ../po
for file in $(echo *.po);
do
  lang=${file%.po}
  echo $lang
  result=`msgmerge -o $lang.new.po $lang.po www.pot`
  if $result; then
    if cmp $lang.po $lang.new.po >/dev/null 2>&1;
    then
      rm -f $lang.new.po
    else 
      if mv -f $lang.new.po $lang.po;
      then
        :;
      else
        echo "msgmerge for $lang.po failed: cannot move $lang.new.po to $lang.po" 1>&2;
        rm -f $lang.new.po;
        exit 1;
      fi;
    fi;
  else
    echo "msgmerge for $lang.gmo failed!";
    rm -f $lang.new.po;
  fi
done
