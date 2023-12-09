#!/bin/bash

composer install

composer run dev

git config --global --add safe.directory /var/www/html
git config core.filemode false

#npm install
#npm run build

apache2-foreground
