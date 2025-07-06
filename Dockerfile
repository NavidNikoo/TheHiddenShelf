# Use official PHP with Apache image
FROM php:8.2-apache

# Install mysqli and other dependencies
RUN apt-get update && \
    docker-php-ext-install mysqli && \
    a2enmod rewrite

# Copy project files into the web server directory
COPY . /var/www/html/

# Set proper permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (Apache default)
EXPOSE 80
