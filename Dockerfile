# Usar una imagen oficial de PHP con Apache
FROM php:8.4-apache

# 1. Instalar todas las dependencias del sistema y Node.js de golpe
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

# 3. Redireccionar Apache a la carpeta /public de Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# 4. Copiar los archivos del proyecto
COPY . /var/www/html

# 5. Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# 6. COMPILAR VITE AQUÍ MISMO (Forzando la URL de Render en el código duro)
ENV ASSET_URL="https://ecociudad.onrender.com"
RUN npm install
RUN npm run build

# 7. Asignar todos los permisos necesarios a Apache
RUN chown -R www-data:www-data /var/www/html

# 8. Comando de arranque limpio (Si las migraciones fallan, la web prende igual con estilos)
CMD cp /etc/secrets/aiven-ca.pem /var/www/html/storage/aiven-ca.pem \
    && chmod 644 /var/www/html/storage/aiven-ca.pem \
    && chown www-data:www-data /var/www/html/storage/aiven-ca.pem \
    && php artisan config:clear \
    && php artisan view:clear \
    && (php artisan migrate --force || true) \
    && apache2-foreground