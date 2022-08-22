# laravel-starter

[![laravel-starter](https://preview.dragon-code.pro/laravel-ready/laravel-starter.svg?brand=laravel)](https://github.com/laravel-ready/laravel-starter)

Ready to use empty laravel starter project template. It has a simple and clean project structure with many features for development and debugging. When you decide to won't use some tools you can remove them quickly, then you can continue to develop.

See the more details in the [README.md](src/README.md) file.

## Preinstalled laravel packages

- [pretty-routes](https://github.com/TheDragonCode/pretty-routes): List all routes in one UI.
  - Navigate to `/routes` in your browser.

- [LogViewer](https://github.com/opcodesio/log-viewer): View Laravel logs in one UI.
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

## Quick API Layer

Generally, we are using Laravel's [resource](https://laravel.com/docs/9.x/eloquent-resources) to create RESTful API. If somethings is going to be more complex than that, I am using respotory pattern and my custom controller to handle it. [ApiController.php](./app/Http/Controllers/Api/ApiController.php) is the API controller and [ApiResourceController.php](./app/Http/Controllers/Api/ApiResourceController.php) is the custom resource controller. So, you can create API's with the same code. When you need more custom code you can add it.

### Example

Add resource router in your `api.php` file.

```php
Route::apiResources([
    'tag.tags' => Tag\TagController::class,
]);
```

Create dummy repository in your `app/Repositories/Tag/TagRepository.php` file. (Assumed model is already created.)

<details>
  <summary>Click to see repository codes</summary>

```php
<?php

namespace App\Repositories\Tag;

use App\Models\Tag\Tag;
use App\Repositories\BaseRepository;

class TagRepository extends BaseRepository
{
    protected array $fieldSearchable = [];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Tag::class;
    }
}
```
</details>

Create your controller in your `app/Http/Controllers/Api/TagController.php` file.

<details>
  <summary>Click to see controller codes</summary>

  We are added a little bit complex logic to handle flexible API's. Also, if you want to add custom permission validator and auto activity logger you must check these controllers. There are some mistery comment blocks.

```php
<?php

namespace App\Http\Controllers\Api\Tag;

use App\Http\Controllers\Api\ApiResourceController;
use App\Http\Requests\Api\Tag\CreateTagRequest;
use App\Models\Tag\Tag;
use App\Repositories\Tag\TagRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TagController extends ApiResourceController
{
    public function __construct(TagRepository $baseRepo)
    {
        parent::__construct($baseRepo);

        $this->sectionName = 'Tag';

        // required spatie/laravel-permission package
        // $this->roleAndPermissions = [
        //     'index' => 'view_product',
        //     'show' => 'view_product',
        //     'store' => 'create_product',
        //     'update' => 'update_product',
        //     'destroy' => 'delete_product',
        // ];
    }

    public function index(Request $request): JsonResponse
    {
        $all = $request->query('all');

        $itemsQuery = $this->baseRepository->makeModel()->orderBy('created_at', 'desc');

        $items = $all ?
            $itemsQuery->get() :
            $itemsQuery->cursorPaginate(20);

        $this->setResponseMessage('listed');

        return $this->sendResponse($items, $this->responseMessage);
    }

    public function show(Tag $tag): JsonResponse
    {
        return $this->showResource($tag);
    }

    public function store(CreateTagRequest $request): JsonResponse
    {
        return $this->storeResource($request);
    }

    public function update(CreateTagRequest $request, Tag $tag): JsonResponse
    {
        return $this->updateResource($request, $tag);
    }

    public function destroy(Tag $tag): JsonResponse
    {
        return $this->destroyResource($tag);
    }
}

```
</details>

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

## ⚠️ Commit Messages

- You need to read [commit message guidelines](https://github.com/RomuloOliveira/commit-messages-guide). 
- You must use [conventional commits](https://conventionalcommits.org/).

Otherwise, I won't be able to review your commits.

## 🐳 Docker

This project comes with a docker stack for laravel. It contains: [Dockerfile](https://github.com/laravel-ready/laravel-starter/blob/main/src/Dockerfile) with [serversideup/php](https://github.com/serversideup/docker-php/) image for Laravel app, [MySQL](https://hub.docker.com/_/mysql), and [Redis](https://hub.docker.com/_/redis) containers.

`docker-compose.yml` use `.env` file for configurations. So, you need to rename `.env-example` to `.env` and fill it with your own credentials. Then you can run `docker-compose up -d` to start the stack.

## 👍 Suggested Tools

- Use [command aliases](https://github.com/EgoistDeveloper/dev-aliases) to save time and make your development environment more comfortable.
