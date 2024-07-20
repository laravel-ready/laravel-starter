@REM First migrations

@REM ~~~~~~~~ Laravel App ~~~~~~~~

@REM go to backend folder
cd ../../

@REM run app migrations
CALL php artisan migrate:fresh --seed --force
