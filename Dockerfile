FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    nginx git curl libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

RUN chown -R www-data:www-data /var/www && chmod -R 755 /var/www

COPY nginx.conf /etc/nginx/sites-available/default

EXPOSE 80

CMD service nginx start && php-fpm
