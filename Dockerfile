FROM php:8.2-apache

COPY . /var/www/html/

RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/frontend|g' /etc/apache2/sites-available/000-default.conf \
    && sed -i 's|<Directory /var/www/>|<Directory /var/www/html/frontend/>|g' /etc/apache2/apache2.conf \
    && a2enmod rewrite

EXPOSE 80