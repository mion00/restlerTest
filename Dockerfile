FROM php:5-fpm

RUN apt-get update && apt-get install -y git unzip && \
    apt-get clean

WORKDIR /usr/local/bin

RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer

WORKDIR /var/www/html
