FROM php:8.1.18-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y

COPY redlock-db.sql /docker-entrypoint-initdb.d/redlock-db.sql
COPY index.php /var/www/html/

RUN chown -R www-data:www-data /var/www/html
RUN chmod 774 /var/www/html/