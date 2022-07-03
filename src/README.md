# laravel-starter

Batteries included ready to use development environment for Laravel.

## Preinstalled packages

- [clockwork](https://github.com/itsgoingd/clockwork): Modern debugging tool for Laravel. (debugbar alternative)
  - Navigate to `/clockwork` in your browser.

- [debugbar](https://github.com/barryvdh/laravel-debugbar): In UI, see app metrics and logs.

- [routes](https://github.com/TheDragonCode/pretty-routes): List all routes in one UI.
  - Navigate to `/routes` in your browser.

- [LogViewer](https://github.com/ARCANEDEV/LogViewer): View Laravel logs in one UI.
  - Navigate to `/logs` in your browser.

- [laravel-data](https://github.com/spatie/laravel-data): Powerful data objects for Laravel.

- [spatie/laravel-ignition](https://github.com/spatie/laravel-ignition): Better error page layout.

- Support
  - [readable-numbers](https://github.com/laravel-ready/readable-numbers): Human readable numbers.
  - [ultimate-support](https://github.com/laravel-ready/ultimate-support): Useful helper collection.
  - [hasin](https://github.com/biiiiiigmonster/hasin): The 'hasin' is 'Relation Mixin' of 'Laravel ORM'. Replacement for some `has` and `whereHas` cases.

- Code Analysis
  - [larastan](https://github.com/nunomaduro/larastan): Adds code analysis to Laravel improving developer productivity and code quality (PHPStan wrapper).
  - [pint](https://github.com/laravel/pint): PHP code style fixer (PHP-CS Fixer wrapper).

## Artisan Commands

<details>
  <summary>Click to see artisan commands</summary>

```bash
# serve app

php artisan serve --port=8000
```

```bash
# quick start

php artisan make:model Folder/ModelName -a
```

```bash
# quick start

php artisan make:model Folder/ModelName -a
```

```bash
# create factory and seeder

php artisan make:factory Folder/ModelNameFactory
php artisan make:seeder Folder/ModelNameSeeder


# then seed the database
php artisan db:seed

# or run see specific seeder
php artisan db:seed --class=Database\Seeders\Folder\SeedTheSeeder
```

```bash
# seed for development
php artisan db:seed --class=DevelopmentSeeder

# seed for production
php artisan db:seed --class=ProductionSeeder
```

```bash
# composer autoload optimization

composer dump-autoload -o
```

</details>


## Larastan Commands

To ignore specific lines of code, add the following [comments](https://github.com/nunomaduro/larastan#ignoring-errors) to your code.

<details>
  <summary>Click to see larastan commands</summary>

```bash
# analyze code

php ./vendor/bin/phpstan analyse --memory-limit=2G --level=9
```
</details>

## Pint Commands

See full config list and examples [here](https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8).

<details>
  <summary>Click to see pint commands</summary>

```bash
# analyze code

php ./vendor/bin/pint -v
```
</details>
