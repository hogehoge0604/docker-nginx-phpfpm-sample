FROM centos:centos7

RUN yum install -y epel-release \
        && rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm \
        && yum -y update \
        && yum install -y --enablerepo=remi,remi-php72 \
            php \
            php-fpm \
            php-devel \
            php-mbstring \
            php-pdo \
            php-common \
            php-pecl-redis \
            php-mysqlnd \
            php-xml \
        && yum install -y nginx \
        && yum install -y --enablerepo=epel supervisor \
        && mkdir /var/run/php-fpm \
        && chmod 755 /var/run/php-fpm

VOLUME /var/www/html

COPY conf/etc/nginx/nginx.conf /etc/nginx/
COPY conf/etc/php-fpm.d/www.conf /etc/php-fpm.d/
COPY conf/etc/supervisord/supervisord.conf /etc/

EXPOSE 80

CMD ["/usr/bin/supervisord", "-n"]
