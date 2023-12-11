FROM jdecode/devops:php83-node20

COPY php.ini /usr/local/etc/php/php.ini

ENTRYPOINT ["/var/www/html/docker-entrypoint.sh"]
