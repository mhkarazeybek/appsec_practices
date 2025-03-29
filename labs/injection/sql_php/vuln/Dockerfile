FROM php:7.4-apache

# Install MySQL extension
RUN docker-php-ext-install mysqli

# Copy application files
COPY src/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html/ 