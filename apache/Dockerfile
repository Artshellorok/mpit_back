FROM alpine

RUN apk update && apk upgrade && apk add \
	apache2 php7-apache2 curl ca-certificates openssl php7 php7-phar php7-json php7-iconv php7-openssl

RUN apk add \
    php7-bcmath \
    php7-bz2 \
    php7-calendar \
    php7-common \
    php7-ctype \
    php7-curl \
    php7-dom \
    php7-gd \
    php7-iconv \
    php7-json \
    php7-mbstring \
    php7-mcrypt \
    php7-mysqlnd \
    php7-openssl \
    php7-pdo_mysql \
    php7-pdo_pgsql \
    php7-pdo_sqlite \
    php7-session \
    php7-xml \
    php7-xmlrpc

EXPOSE 80

CMD ["httpd", "-D", "FOREGROUND"]
