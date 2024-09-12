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

# setup project
docker exec mb_dev_app composer install
docker exec mb_dev_app php artisan key:generate
docker exec mb_dev_app php artisan migrate:fresh --seed
