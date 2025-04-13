# FROM alpine:3.20

# ARG PHP_VERSION=82

# # Update and install PHP 8.2 packages from Alpine repository
# RUN apk update && apk upgrade && apk add --no-cache \
#     php${PHP_VERSION} \
#     php${PHP_VERSION}-common \
#     php${PHP_VERSION}-session \
#     php${PHP_VERSION}-iconv \
#     php${PHP_VERSION}-gd \
#     php${PHP_VERSION}-curl \
#     php${PHP_VERSION}-xml \
#     php${PHP_VERSION}-mysqli \
#     php${PHP_VERSION}-imap \
#     php${PHP_VERSION}-cgi \
#     php${PHP_VERSION}-pdo \
#     php${PHP_VERSION}-pdo_mysql \
#     php${PHP_VERSION}-soap \
#     php${PHP_VERSION}-posix \
#     php${PHP_VERSION}-gettext \
#     php${PHP_VERSION}-ldap \
#     php${PHP_VERSION}-ctype \
#     php${PHP_VERSION}-dom \
#     php${PHP_VERSION}-simplexml \
#     wget

# WORKDIR /var/www

# # Download Adminer
# RUN wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php && \
#     mv adminer-4.8.1.php index.php && chown -R root:root /var/www/

# EXPOSE 8080

# # Run PHP 8.2 built-in server (ensure it's the correct binary name for your PHP version)
# CMD [ "php82", "-S", "[::]:8080", "-t", "/var/www" ]


FROM alpine:3.20

ARG PHP_VERSION=82

# Install PHP 8 and necessary extensions
RUN apk update && apk upgrade && apk add --no-cache \
    php${PHP_VERSION} \
    php${PHP_VERSION}-common \
    php${PHP_VERSION}-session \
    php${PHP_VERSION}-iconv \
    php${PHP_VERSION}-gd \
    php${PHP_VERSION}-curl \
    php${PHP_VERSION}-xml \
    php${PHP_VERSION}-mysqli \
    php${PHP_VERSION}-imap \
    php${PHP_VERSION}-cgi \
    php${PHP_VERSION}-pdo \
    php${PHP_VERSION}-pdo_mysql \
    php${PHP_VERSION}-soap \
    php${PHP_VERSION}-posix \
    php${PHP_VERSION}-gettext \
    php${PHP_VERSION}-ldap \
    php${PHP_VERSION}-ctype \
    php${PHP_VERSION}-dom \
    php${PHP_VERSION}-simplexml \
    wget

WORKDIR /var/www

# Download Adminer 5.2.1
RUN wget https://github.com/vrana/adminer/releases/download/v5.2.1/adminer-5.2.1.php && \
    mv adminer-5.2.1.php index.php && chown -R root:root /var/www/

EXPOSE 8080

# Start the PHP 8 built-in web server on port 8080
CMD [ "php82", "-S", "[::]:8080", "-t", "/var/www" ]
