FROM php:8.2-apache

# Install system dependencies and mysqli extension
RUN apt-get update && \
    apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip && \
    docker-php-ext-install mysqli && \
    a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose Apache default port
EXPOSE 80
