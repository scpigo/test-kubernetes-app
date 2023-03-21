FROM php:8.0-apache

COPY ./app .

RUN a2enmod rewrite

RUN apt-get update && \
    apt-get install -y libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql pgsql

EXPOSE 80