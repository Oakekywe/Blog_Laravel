FROM php:7.4-apache

# Install dependencies
RUN apt-get update && apt-get install -y libssl1.0.0

# Set the working directory
WORKDIR /var/www/html

# Copy project files to the working directory
COPY . /var/www/html

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
RUN composer install

# Ensure the Laravel storage and cache directories are writable
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose the port the app runs on
EXPOSE 80
