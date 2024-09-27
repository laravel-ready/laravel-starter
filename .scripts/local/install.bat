@REM copy .env.example as .env
CALL copy .env.example .env

@REM install PHP packges
CALL composer install

@REM laravel app key
CALL php artisan key:generate

@REM link storage folder
CALL php artisan storage:link

@REM install NPM packges
CALL pnpm i

@REM run docker images
CALL docker compose -f docker-compose-dev.yml up -d

@REM setup project
CALL docker exec ls_dev_app composer install
CALL docker exec ls_dev_app php artisan key:generate
CALL docker exec ls_dev_app php artisan migrate:fresh --seed
