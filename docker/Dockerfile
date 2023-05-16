FROM php:8.1-fpm

WORKDIR /var/www

RUN apt-get update \
    && apt-get install -y git curl zip vim libzip-dev libicu-dev libpng-dev \
    && docker-php-ext-install zip mysqli pdo pdo_mysql intl gd bcmath gettext \
    && docker-php-ext-enable pdo_mysql intl gd bcmath gettext

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN  cd /var/www composer update

RUN  cd /var/www composer db
