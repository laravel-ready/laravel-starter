# Laravel Ready Dev Docs

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
- [tr](https://github.com/relliv/laravel-turkish-translations)

### Preinstalled packages

## ⚡ ViteJS

Also this project uses [ViteJS](https://vitejs.io/) to speed up the development process. You can use it to build your project faster.

**Why we are using both of them?**
> ViteJS is a JavaScript runtime that is optimized for web applications. For example, it is optimized for the Vue.js framework. But if you want to use blade templates, Laravel Mix is still a useful option.

## 🎨 Artisan Commands

<details>
  <summary>Click to see artisan commands</summary>

Serve app

```bash
pas

# or

php artisan serve
```

Create necessary files and model

```bash
# create migrataion, factory, seeder, model, policy, controller, request at once
php artisan make:model Language/Language -msa

# create filamet resources at once
php artisan make:filament-resource Language/Language --generate

# seed the database
php artisan db:seed
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

## 🔄 Run Github Actions on Your Local

You can run github [actions](https://docs.github.com/en/actions/writing-workflows/quickstart) workflow on your local environment with [Act](https://github.com/nektos/act) app for basic scenarios.

> [!WARNING]  
> Act is using `catthehacker/ubuntu` images and `ubuntu-latest` image is around ~20GB (after extraction is will be ~60GB). First installation may take long time. To see all image variations check available [tags](https://github.com/catthehacker/docker_images/pkgs/container/ubuntu). To avoid this use lighter images, like `js-latest`.

Run this command and watch local action steps in your terminals:

```bash
# run all
act act -P ubuntu-latest=catthehacker/ubuntu:js-latest --verbose

# run specific workflow
act -W '.github/workflows/test.yml' -P ubuntu-latest=catthehacker/ubuntu:js-latest --verbose
```

Also, you can manage some [configs](https://nektosact.com/usage/index.html?highlight=.actrc#configuration-file) with [.actrc](./.actrc) file.

When we pushed our repository github will handle with original `ubuntu-latest` image (*also, see [limitations](https://nektosact.com/not_supported.html)*).

## 👍 Suggested VS Code Plugins and Tools

### Plugins

- [EditorConfig](https://marketplace.visualstudio.com/items?itemName=EditorConfig.EditorConfig): syncs our editor configs, required for `.editorconfig` file.
- [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode): common formatter plugin, required for `.prettierrc` file.
- [Terminals Manager](https://marketplace.visualstudio.com/items?itemName=fabiospampinato.vscode-terminals): a terminal manager that automatically launches terminals, required for `.vscode\terminals.json`.
- [Peacock](https://marketplace.visualstudio.com/items?itemName=johnpapa.vscode-peacock): custom theme manager for multiple projects, required for `.vscode\settings.json`.
- [Docker](https://marketplace.visualstudio.com/items?itemName=ms-azuretools.vscode-docker): a minimal docker manager, required for backend and full-stack developers.

### Tools

- [Command Aliases](https://github.com/relliv/dev-aliases): quick CLI command aliases.
