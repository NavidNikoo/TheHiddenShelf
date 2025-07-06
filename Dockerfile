# Use an official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy your code into the Apache server root
COPY . /var/www/html/

# Set working directory (optional)
WORKDIR /var/www/html/

# Give permission (just in case)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80 (default for Apache)
EXPOSE 80
