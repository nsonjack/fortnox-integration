# Använd officiell PHP-bild med Apache
FROM php:8.2-apache

# Kopiera alla projektfiler till webbserverns root
COPY . /var/www/html/

# Ge rätt behörigheter
RUN chown -R www-data:www-data /var/www/html

# Aktivera Apache rewrite-modul (om du skulle behöva det framöver)
RUN a2enmod rewrite
