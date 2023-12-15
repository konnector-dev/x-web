release: php artisan migrate --seed --force && php artisan optimize:clear && npm install --include=dev && npm run build
web: vendor/bin/heroku-php-apache2 public/
worker: php artisan queue:listen --tries=3 --timeout=1800
