FROM php:8.2-fpm-alpine3.16

RUN apk update \
    && apk add \
    bash \
    vim \
    zip \
    unzip \
    libzip-dev \
    curl \
    git \
    unzip \
    nodejs \
    npm \
    && apk add libpq-dev && docker-php-ext-install pdo_pgsql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
