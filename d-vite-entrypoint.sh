#!/bin/bash

git config --global --add safe.directory /var/www/html

npm install
npm run build

apache2-foreground
