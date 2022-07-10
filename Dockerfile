# version 0.1
FROM debian:buster
LABEL maintainer="teevee@students.21-school.ru"

RUN apt-get update && apt-get upgrade -y
RUN apt-get install nginx -y
RUN apt-get install mariadb-server -y
RUN apt-get install curl -y
RUN apt-get install php php-fpm php-mysql php-curl php-intl php-mbstring php-soap php-xml php-xmlrpc php-zip -y

RUN chown -R www-data:www-data /var/www/*

RUN rm -rf /etc/nginx/sites-available/default
COPY ./srcs/default /etc/nginx/sites-available/default

COPY ./srcs/phpMyAdmin-5.0.2-all-languages.tar.gz ./
RUN tar xvf phpMyAdmin-5.0.2-all-languages.tar.gz
RUN mv phpMyAdmin-5.0.2-all-languages /var/www/phpMyAdmin-5.0.2-all-languages
COPY ./srcs/config.inc.php /var/www/config.inc.php

COPY ./srcs/wordpress-5.5-ru_RU.tar.gz ./
RUN tar xvf wordpress-5.5-ru_RU.tar.gz
RUN mv wordpress/ /var/www/wordpress
COPY ./srcs/wp-config.php /var/www/wordpress/wp-config.php

COPY ./srcs/start.sh ./

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt \
	-subj "/C=ru/ST=Moscow/L=Moscow/O=21sch/OU=Vicugna pacos/CN=teevee/"

COPY ./srcs/autoindex_switch.sh ./

EXPOSE 80 443

CMD bash start.sh
