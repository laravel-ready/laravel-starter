# You need to run this on every update (only for production)

# ~~~~~~~~ Laravel App ~~~~~~~~

# go to backend folder
cd ../../

# install composer dependencies
composer install

# migrate database
php artisan migrate

# install NPM packges
npm i -s

# run build script
npm run build
npm run prod

# run optimize command
php artisan optimize
