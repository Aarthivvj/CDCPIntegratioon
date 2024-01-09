FROM ubuntu:20.04
MAINTAINER Aarthi <aarthivvj@gmail.com>

#Update Repository
RUN apt-get update -y

#Install Apache	
RUN apt-get install -y apache2

#Copy Application Files
RUN rm -rf /var/www/html/*
COPY MVGSrc /var/www/html

#Open port 80
EXPOSE 80

#Start Apache service
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"] 
