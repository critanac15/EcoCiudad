# Usar una imagen oficial de PHP con Apache
FROM php:8.4-apache

# 1. Instalar dependencias de PHP, utilidades y Node.js en un solo paso
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libonig-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring gd

# 2. Habilitar la reescritura de URLs de Apache
RUN a2enmod rewrite

# 3. Decirle a Apache que la web empieza en /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Copiar todos los archivos de tu proyecto al servidor
COPY . /var/www/html

# 5. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 6. Instalar las dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# 7. LA MAGIA: Forzar las variables de entorno ANTES de compilar Vite
ENV APP_ENV="production"
ENV APP_URL="https://ecociudad.onrender.com"
ENV ASSET_URL="https://ecociudad.onrender.com"

# 8. Compilar los assets con Vite (ahora sí sabrá que es HTTPS)
RUN npm install
RUN npm run build

# 9. Dar permisos a las carpetas (incluyendo la nueva carpeta /build que Vite acaba de crear)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/build

# 10. Arrancar: Copiar certificado, limpiar cachés profundas de Laravel, migrar y encender Apache
CMD cp /etc/secrets/aiven-ca.pem /var/www/html/storage/aiven-ca.pem \
    && chmod 644 /var/www/html/storage/aiven-ca.pem \
    && chown www-data:www-data /var/www/html/storage/aiven-ca.pem \
    && php artisan optimize:clear \
    && php artisan migrate --force \
    && apache2-foreground