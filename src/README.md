# laravel-starter

Batteries included ready to use development environment for Laravel.

## Preinstalled laravel packages

- [pretty-routes](https://github.com/TheDragonCode/pretty-routes): List all routes in one UI.
  - Navigate to `/routes` in your browser.

- [LogViewer](https://github.com/ARCANEDEV/LogViewer): View Laravel logs in one UI.
  - Navigate to `/logs` in your browser.

- [laravel-data](https://github.com/spatie/laravel-data): Powerful data objects for Laravel.

- [spatie/laravel-ignition](https://github.com/spatie/laravel-ignition): Better error page layout. (packageist: *binarytorch/larecipe*)

- [saleem-hadad/larecipe](https://github.com/saleem-hadad/larecipe): Write documentation via Markdown inside your Laravel App.
  - First, you must run `php artisan larecipe:install` command to publish the needed assets and configurations. 
  - Then, Navigate to `/docs` in your browser.

- Debugging
  - [clockwork](https://github.com/itsgoingd/clockwork): Modern debugging tool for Laravel. (debugbar alternative)
    - Navigate to `/clockwork` in your browser.

  - [debugbar](https://github.com/barryvdh/laravel-debugbar): In UI, see app metrics and logs.

  - [laravel-ray](https://github.com/spatie/laravel-ray): Debug with Ray to fix problems faster in Laravel apps. It requires **[ray app](https://myray.app/)** (paid app).

- Support
  - [readable-numbers](https://github.com/laravel-ready/readable-numbers): Human readable numbers.
  - [ultimate-support](https://github.com/laravel-ready/ultimate-support): Useful helper collection.
  - [hasin](https://github.com/biiiiiigmonster/hasin): The 'hasin' is 'Relation Mixin' of 'Laravel ORM'. Replacement for some `has` and `whereHas` cases.

- Code Analysis
  - [larastan](https://github.com/nunomaduro/larastan): Adds code analysis to Laravel improving developer productivity and code quality (PHPStan wrapper).
  - [pint](https://github.com/laravel/pint): PHP code style fixer (PHP-CS Fixer wrapper).
  - [pest](https://github.com/pestphp/pest): Pest is an elegant PHP Testing Framework with a focus on simplicity.

## Languages

- en: native/default
- [tr](https://github.com/EgoistDeveloper/laravel-turkish-translations)

## Preinstalled mix packages

- [browser-sync](https://github.com/Browsersync/browser-sync): Keep multiple browsers & devices in sync when building apps.
  - First, you must run `php artisan serve` to start the server. Then run `npm run watch` to watch for changes. Browsersync listens to laravel app 8000 port and exposes it to your browser at `localhost:3000` and Browsersync UI `localhost:3001` ports.

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
# check and fix code style

php ./vendor/bin/pint -v
```
</details>

## Pest Commands

See more examples abouts pesting [here](https://pestphp.com/docs/writing-tests).

<details>
  <summary>Click to see pest commands</summary>

```bash
# run tests

php ./vendor/bin/pest
```
</details>
