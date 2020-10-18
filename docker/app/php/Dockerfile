
FROM php:7.4-apache

WORKDIR /var/www/html

# PHP で必要なライブラリをインストール
RUN apt-get update \
    && apt-get install -y libonig-dev libzip-dev unzip mariadb-client \
    && docker-php-ext-install pdo_mysql mysqli mbstring zip

# composer のインストール
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

# ファイルのコピー
COPY ./ /var/www/html
COPY ./docker/app/php/php.ini /usr/local/etc/php/php.ini
COPY ./docker/app/php/php-fpm.conf /usr/local/etc/php-fpm.conf
COPY ./docker/app/php/www.conf /usr/local/etc/php-fpm.d/www.conf

# Heroku で Apache2 が設定エラーになることへの対応
# https://github.com/docker-library/wordpress/issues/293
COPY ./docker/app/php/run-apache2.sh /usr/local/bin/
# CMD [ "run-apache2.sh" ]
