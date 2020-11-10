#!/bin/bash

for file in $(find . -maxdepth 1 -type f -name "*.html" -and -not -name index.html)
do
  file=$(basename $file)
  name=${file/.*}     # strip suffix
  if ! grep -q $file index.html; then
    sed -i.bak "/<ul>/ a \      <li><a href=\"/$file\"</a>$name<\/li>" index.html
  fi
done
