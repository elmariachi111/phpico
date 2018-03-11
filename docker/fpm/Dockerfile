FROM php:7.2.3-fpm-alpine3.7

ARG TIMEZONE=Europe/Berlin

RUN apk add --update \
    $PHPIZE_DEPS \
    bash \
    nano \
    curl \
    openssl \
    git \
    unzip \
  && rm -rf /var/cache/apk/*

RUN echo 'alias sf="php app/console"' >> ~/.bashrc && \
    echo 'alias sf3="php bin/console"' >> ~/.bashrc

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set timezone
RUN ln -snf /usr/share/zoneinfo/${TIMEZONE} /etc/localtime && echo ${TIMEZONE} > /etc/timezone
RUN printf '[PHP]\ndate.timezone = "%s"\n', ${TIMEZONE} > /usr/local/etc/php/conf.d/tzone.ini

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql

RUN docker-php-ext-install opcache

# install xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY php.ini /usr/local/etc/php/conf.d/30-custom.php.ini

WORKDIR /var/www/html