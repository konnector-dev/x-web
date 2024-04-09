FROM jdecode/devops:php83-node20-x3
WORKDIR /var/www/html

COPY . /var/www/html

RUN composer install --no-progress --no-suggest --no-interaction
RUN composer run dev

RUN npm install
RUN npm run build
