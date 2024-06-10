#!/bin/bash

# Update package lists
apt-get update

# Install PHP
apt-get install -y php

# Install required PHP extensions (if needed)
# For example, if you need the mbstring extension:
# apt-get install -y php-mbstring

# Install Composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Composer dependencies
composer install --no-dev --optimize-autoloader

# Ensure the Laravel storage and cache directories are writable
chown -R www-data:www-data storage bootstrap/cache

# Clear and cache Laravel configurations
php artisan config:cache
php artisan route:cache
php artisan view:cache
