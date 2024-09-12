FROM serversideup/php:8.3-fpm-nginx-v3.3.0 AS base

# Set working directory
WORKDIR /var/www/html

# Switch user to root
USER root

# Install required php extensions
RUN install-php-extensions zip intl exif bcmath gd

# ---- Dependencies ----
FROM base AS dependencies

# Install Node.js
RUN curl -fsSL https://deb.nodesource.com/setup_22.x | bash - \
    && apt-get install -y nodejs

# Install pnpm
RUN npm i -g pnpm

# Copy package.json and pnpm-lock.yaml
COPY . .

RUN rm -rf node_modules
RUN rm pnpm-lock.yaml

# Install node packages
RUN pnpm set progress=false && pnpm config set depth 0
RUN pnpm i
RUN pnpm build

# Install composer packages
RUN composer install

# ---- Release ----
FROM base AS production

# Copy node_modules from dependencies
COPY --from=dependencies /var/www/html/node_modules /var/www/html/node_modules
COPY --from=dependencies /var/www/html/vendor /var/www/html/vendor
COPY --from=dependencies /var/www/html/public/build /var/www/html/public/build

# Switch to www-data user
USER www-data

# Expose port
EXPOSE 8080
