# copy .env.example as .env
cp .env.example .env

# install PHP packges
composer install

# laravel app key
php artisan key:generate

# link storage folder
php artisan storage:link

# install NPM packges
pnpm i

# run docker images
docker compose -f docker-compose-dev.yml up -d
