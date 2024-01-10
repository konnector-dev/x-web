FROM jdecode/devops:php83-node20

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install

CMD php artisan queue:listen --tries=3 --timeout=3600
