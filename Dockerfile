FROM php:8.3-apache

RUN apt-get update -y && apt-get install -y \
    nodejs \
    npm \
    curl \
    zip \
    unzip \ 
    && docker-php-ext-install pdo pdo_mysql


WORKDIR /var/www
COPY . .

COPY ./vhost.conf /etc/apache2/sites-enabled/000-default.conf
RUN a2dis rewrite
COPY --from=composer:2.5.8 /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite


ENV PORT=443

CMD ["apache2-foreground"]

ENTRYPOINT [ "./entrypoint.sh" ]

