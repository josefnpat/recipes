#!/bin/sh
GIT=`git log --pretty=format:'%h' -n 1`
cd src
php index.php > temp.html
# Use US Letter head.
../wkhtmltopdf -s Letter -d 320 -B 0 -L 0 -R 0 -T 0 temp.html ../recipes_${GIT}.pdf
rm temp.html
cd ..
rm recipes.pdf
ln -s recipes_${GIT}.pdf recipes.pdf
