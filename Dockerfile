FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Set AllowOverride All for .htaccess support in the main directory
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf
RUN sed -i '/<Directory \/var\/www\/html\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# Reload Apache to apply changes (not strictly necessary, but explicit)
RUN service apache2 reload || true

# Install system dependencies and PHP extensions for Kirby 4
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libwebp-dev \
    libxpm-dev \
    zlib1g-dev \
    libzip-dev \
    libonig-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install mysqli pdo pdo_mysql gd exif mbstring fileinfo

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# (Optional) Install other extensions as needed
# RUN docker-php-ext-install intl zip 