# Usar una imagen oficial de PHP con Apache
FROM php:8.2-apache

# 1. Instalar dependencias del sistema requeridas por Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring gd

# 2. Habilitar la reescritura de URLs de Apache (Crucial para las rutas de Laravel)
RUN a2enmod rewrite

# 3. Decirle a Apache que la web empieza en la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Copiar todos los archivos de tu proyecto al servidor
COPY . /var/www/html

# 5. Instalar Composer (el gestor de paquetes de PHP)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. Instalar las dependencias de Laravel (ignorando las de desarrollo)
RUN composer install --no-dev --optimize-autoloader

# 7. Dar permisos a las carpetas que Laravel necesita modificar
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache