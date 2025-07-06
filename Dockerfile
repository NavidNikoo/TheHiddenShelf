# Use official PHP image
FROM php:8.2-cli

# Set working directory inside the container
WORKDIR /var/www/html

# Copy all files into container
COPY . .

# Start PHP built-in server on Render's port
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
