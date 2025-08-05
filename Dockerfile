FROM php:8.2-apache

COPY . /var/www/html/

# Ge rätt ägande och läsbehörigheter
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

RUN a2enmod rewrite
