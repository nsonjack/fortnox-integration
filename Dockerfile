FROM php:8.2-apache

# Ta bort default-index och lägg vår kod i rätt mapp
RUN rm -rf /var/www/html/*

# Kopiera alla filer till Apache root
COPY . /var/www/html/

# Se till att filerna kan nås
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Aktivera rewrite om det behövs
RUN a2enmod rewrite
