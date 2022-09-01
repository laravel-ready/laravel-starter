# First installation of apps

# ~~~~~~~~ Laravel App ~~~~~~~~

# go to backend folder
cd ../../

# install PHP packges
composer install

# laravel app key
php artisan key:generate

# install NPM packges
npm i -s

# run build script
npm run build
npm run prod
