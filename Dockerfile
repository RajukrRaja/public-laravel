# PHP-FPM base
FROM php:8.2-fpm

# System deps
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev sqlite3 libsqlite3-dev

# PHP extensions
RUN docker-php-ext-install pdo pdo_sqlite mbstring bcmath exif pcntl gd

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Workdir
WORKDIR /var/www

# Project copy
COPY . .

# Install deps (no dev for speed, change if needed)
RUN composer install --no-interaction --prefer-dist

# Permissions
RUN chmod -R 775 storage bootstrap/cache

CMD ["php-fpm"]