FROM alpine:3.20

ARG PHP_VERSION=82 \
    DB_NAME \
    DB_USER \
    DB_PASS \
    DB_HOST \
    WP_ADMIN \
    WP_ADMIN_PWD \
    WP_ADMIN_EMAIL \
    WP_SITE_TITLE \
    WP_SITE_URL \
    WP_THEME

RUN apk update && apk upgrade && apk add --no-cache \
    php${PHP_VERSION} \
    php${PHP_VERSION}-fpm \
    php${PHP_VERSION}-mysqli \
    php${PHP_VERSION}-json \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-dom \
    php${PHP_VERSION}-exif \
    php${PHP_VERSION}-fileinfo \
    php${PHP_VERSION}-mbstring \
    php${PHP_VERSION}-openssl \
    php${PHP_VERSION}-xml \
    php${PHP_VERSION}-zip \
    php${PHP_VERSION}-redis \
    php${PHP_VERSION}-phar \
    mariadb-client \
    curl \
    wget \
    unzip && \
    sed -i "s|listen = 127.0.0.1:9000|listen = 9000|g" \
      /etc/php82/php-fpm.d/www.conf && \
    sed -i "s|;listen.owner = nobody|listen.owner = nobody|g" \
      /etc/php82/php-fpm.d/www.conf && \
    sed -i "s|;listen.group = nobody|listen.group = nobody|g" \
      /etc/php82/php-fpm.d/www.conf && \
    rm -f /var/cache/apk/*

WORKDIR /var/www
RUN wget https://wordpress.org/latest.zip && \
    unzip latest.zip && \
    cp -rf wordpress/* . && \
    rm -rf wordpress latest.zip

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar && \
    chmod +x wp-cli.phar && \
    mv wp-cli.phar /usr/local/bin/wp

COPY ./requirements/wordpress/conf/wp-config-create.sh .
RUN sh wp-config-create.sh && rm wp-config-create.sh

COPY ./requirements/wordpress/conf/wp-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/wp-entrypoint.sh


RUN chmod -R 0777 wp-content/

CMD ["sh", "/usr/local/bin/wp-entrypoint.sh"]
