FROM php:7.3-apache

WORKDIR /var/www/html

RUN apt-get -y update && apt-get -y install git zip
