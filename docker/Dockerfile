FROM php:7.3-fpm

COPY composer.lock composer.json /var/www/

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    nodejs \
    npm \
    sudo \
    unzip \
    git \
    curl
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    build-essential \
    mariadb-client \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \


RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd
RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www
COPY . /var/www
COPY --chown=www:www . /var/www
USER www

EXPOSE 9000
CMD ["php-fpm"]
