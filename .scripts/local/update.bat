@REM You need to run this on every update (only for production)

@REM ~~~~~~~~ Laravel App ~~~~~~~~

@REM go to backend folder
cd ../../

@REM install composer dependencies
CALL composer install

@REM migrate database
CALL php artisan migrate

@REM install NPM packges
CALL npm i -s

@REM run build script
CALL npm run build
CALL npm run prod

@REM run optimize command
CALL php artisan optimize
