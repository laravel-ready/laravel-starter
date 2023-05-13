## 📦 Preinstalled laravel packages

- [pretty-routes](https://github.com/TheDragonCode/pretty-routes): List all routes in one UI.
  - Navigate to `/routes` in your browser.

- [LogViewer](https://github.com/opcodesio/log-viewer): View Laravel logs in one UI.
  - Navigate to `/logs` in your browser.

- [laravel-data](https://github.com/spatie/laravel-data): Powerful data objects for Laravel.

- [spatie/laravel-ignition](https://github.com/spatie/laravel-ignition): Better error page layout. (packageist: *binarytorch/larecipe*)

- [saleem-hadad/larecipe](https://github.com/saleem-hadad/larecipe): Write documentation via Markdown inside your Laravel App.
  - First, you must run `php artisan larecipe:install` command to publish the needed assets and configurations. 
  - Then, Navigate to `/docs` in your browser.

- [laravel/ui](https://github.com/laravel/ui): Ready to use auth views, forms, UI utilities and presets.
  - Views and controllers are already installed but you can overwrite with run `php artisan ui:auth` command to publish the needed assets and configurations.

- Debugging
  - [clockwork](https://github.com/itsgoingd/clockwork): Modern debugging tool for Laravel. (debugbar alternative)
    - Navigate to `/clockwork` in your browser.

  - [debugbar](https://github.com/barryvdh/laravel-debugbar): In UI, see app metrics and logs.

  - [laravel-ray](https://github.com/spatie/laravel-ray): Debug with Ray to fix problems faster in Laravel apps. It requires **[ray app](https://myray.app/)** (paid app).

- Support
  - [readable-numbers](https://github.com/laravel-ready/readable-numbers): Human readable numbers.
  - [ultimate-support](https://github.com/laravel-ready/ultimate-support): Useful helper collection.
  - [hasin](https://github.com/biiiiiigmonster/hasin): The 'hasin' is 'Relation Mixin' of 'Laravel ORM'. Replacement for some `has` and `whereHas` cases.
  - [once](https://github.com/spatie/once): A magic memoization function to cache the result of a function call.

- Code Analysis
  - [larastan](https://github.com/nunomaduro/larastan): Adds code analysis to Laravel improving developer productivity and code quality (PHPStan wrapper).
  - [pint](https://github.com/laravel/pint): PHP code style fixer (PHP-CS Fixer wrapper).
  - [pest](https://github.com/pestphp/pest): Pest is an elegant PHP Testing Framework with a focus on simplicity.

## 🚩 Languages

- en: native/default
- [tr](https://github.com/EgoistDeveloper/laravel-turkish-translations)

## 🔰 Laravel Mix

This project uses [Laravel Mix](https://laravel.com/docs/9.x/mix) to compile the assets.

### Preinstalled packages

- [browser-sync](https://github.com/Browsersync/browser-sync): Keep multiple browsers & devices in sync when building apps.
  - First, you must run `php artisan serve` to start the server. Then run `npm run watch` to watch for changes. Browsersync listens to laravel app 8000 port and exposes it to your browser at `localhost:3000` and Browsersync UI `localhost:3001` ports.

## ⚡ ViteJS

Also this project uses [ViteJS](https://vitejs.io/) to speed up the development process. You can use it to build your project faster.

**Why we are using both of them?**
> ViteJS is a JavaScript runtime that is optimized for web applications. For example, it is optimized for the Vue.js framework. But if you want to use blade templates, Laravel Mix is still a useful option. Plus, browser-sync is a great solution for smooth development.

## 🎨 Artisan Commands

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

## ✂️ Pint Commands

See full config list and examples [here](https://mlocati.github.io/php-cs-fixer-configurator/#version:3.8).

<details>
  <summary>Click to see pint commands</summary>

```bash
# check and fix code style

php ./vendor/bin/pint -v
```
</details>

## 🔬 Pest Commands

See more examples abouts pesting [here](https://pestphp.com/docs/writing-tests).

<details>
  <summary>Click to see pest commands</summary>

```bash
# run tests

php ./vendor/bin/pest
```
</details>

## ⚠️ Commit Messages

- You need to read [commit message guidelines](https://github.com/RomuloOliveira/commit-messages-guide). 
- You must use [conventional commits](https://conventionalcommits.org/).

Otherwise, I won't be able to review your commits.

## 🐳 Docker

This project comes with a docker stack for laravel. It contains: [serversideup/php](https://github.com/serversideup/docker-php/) image for Laravel app, [MySQL](https://hub.docker.com/_/mysql), and [Redis](https://hub.docker.com/_/redis) containers.

`docker-compose.yml` use `.env` file for configurations. So, you need to rename `.env-example` to `.env` and fill it with your own credentials. Then you can run `docker-compose up -d` to start the stack.

## 👍 Suggested Tools

- Use [command aliases](https://github.com/EgoistDeveloper/dev-aliases) to save time and make your development environment more comfortable.

- This project handles multiple terminals on startup with [Terminals Manager](https://marketplace.visualstudio.com/items?itemName=fabiospampinato.vscode-terminals). You can configure it in `.vscode/terminals.json` file.

- If you are working on multiple projects, you can set accent color for each project with [Peacock](https://marketplace.visualstudio.com/items?itemName=johnpapa.vscode-peacock). You can configure it in `.vscode/settings.json` file.

- To consistent workplace, you can use [EditorConfig](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig) extension.
