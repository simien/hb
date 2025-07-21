FROM php:7.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Set AllowOverride All for .htaccess support in the main directory
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN sed -i '/<Directory \/var\/www\/html\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Reload Apache to apply changes (not strictly necessary, but explicit)
RUN service apache2 reload || true

# (Optional) Install PHP extensions if needed
# RUN docker-php-ext-install mysqli pdo pdo_mysql 