FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    iputils-ping \
    npm \
    && docker-php-ext-install pdo pdo_mysql pdo_pgsql pgsql

RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

WORKDIR /var/www/html

COPY apache.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

EXPOSE 80

