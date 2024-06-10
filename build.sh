#!/bin/bash

# Run build commands here
# For example, if your build process generates files in a `public` directory:

# Build your Laravel project
# Replace this with your actual build commands
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Create the output directory if it doesn't exist
mkdir -p dist

# Copy or move the built files to the output directory
cp -R public/. dist/
