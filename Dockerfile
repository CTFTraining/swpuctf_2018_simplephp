FROM ubuntu:16.04
ENV DEBIAN_FRONTEND noninteractive
RUN   apt-get -y update && \
      apt-get -y install apache2 php libapache2-mod-php && \
      apt-get -y autoremove

COPY ./src /var/www/html
RUN chmod 777 /var/www/html/upload
RUN rm /var/www/html/index.html

EXPOSE 80

CMD service apache2 start && tail -f /dev/null
