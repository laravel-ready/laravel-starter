# a production ready php docker image
# https://github.com/serversideup/docker-php/
FROM serversideup/php:8.1-fpm-apache

# update packages
RUN apt-get update --fix-missing

# install additional packages
RUN apt-get update
RUN apt-get install -y \
    g++ \
    zip \
    curl \
    sudo \
    unzip \
    libicu-dev \
    libpng-dev \
    libbz2-dev \
    libpng-dev \
    libzip-dev \
    libjpeg-dev \
    libmcrypt-dev \
    libreadline-dev \
    libfreetype6-dev \
    php8.1-imagick \
    php8.1-bz2 \
    php8.1-intl \
    php8.1-bcmath \
    php8.1-imagick \
    libmagickwand-dev --no-install-recommends &&
    apt-get clean &&
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*
