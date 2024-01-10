FROM jdecode/devops:php83-node20

WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install

RUN npm install

RUN npm run build

CMD php artisan serve --host=0.0.0.0 --port=$PORT
