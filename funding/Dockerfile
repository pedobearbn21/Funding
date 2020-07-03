FROM php:7.3-fpm-alpine
RUN docker-php-ext-install pdo mbstring
RUN docker-php-ext-install pdo_mysql
RUN apk add --update --no-cache git zip unzip ca-certificates openssl
RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
    docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
    NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
    docker-php-ext-install -j${NPROC} gd && \ 
    apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
# RUN cp upload.ini /usr/local/etc/php/conf.d
# Setting up time zone
RUN sed -i 's/dl-cdn.alpinelinux.org/mirrors.ustc.edu.cn/g' /etc/apk/repositories
RUN apk add --no-cache tzdata \
    && ln -sf /usr/share/zoneinfo/Asia/Bangkok /etc/localtime \
    && echo "Asia/Bangkok" > /etc/timezone
# RUN echo "*/1     *       *       *       *       php /app/artisan schedule:run" >> /etc/crontabs/root
# RUN /usr/local/bin/composer install
# RUN /usr/local/bin/composer update
# RUN /usr/local/bin/composer dump-autoload
COPY database/ database/
COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist
COPY . .
#COPY --from=vendor /app/vendor/ /app/vendor/
# COPY --from=frontend /app/public /app/public
# CMD  crond && php artisan serve --host=0.0.0.0 --port=8080
CMD php artisan key:generate; php artisan serve  --host=0.0.0.0 --port=8080

EXPOSE 8080