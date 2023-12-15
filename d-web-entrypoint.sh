#!/bin/bash

composer install

composer run dev

git config --global --add safe.directory /var/www/html
git config core.filemode false
git config pull.rebase true

apache2-foreground
