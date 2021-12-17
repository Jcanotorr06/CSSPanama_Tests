FROM php:7.3-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

#Actualizar
RUN apt-get update
#Instalar git y unzip
RUN apt-get install -y git unzip

#Instalar módulos de pdo, pdo_mysql y mysqli
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite

#Instalar composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

VOLUME /var/www/html
EXPOSE 80
