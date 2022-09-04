@REM You need to run this on every update

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
