# Use the base image with PHP and Apache
FROM php:7.4-apache

LABEL maintainer="Aarthi <aarthivvj@gmail.com>"

#Copy Application Files
RUN rm -rf /var/www/html/*
COPY MVGSrc /var/www/html

# Expose port 80
EXPOSE 80

# Start the Apache service on container start
CMD ["apache2-foreground"]
