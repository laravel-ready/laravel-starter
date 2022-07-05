# laravel-starter

[![laravel-starter](https://preview.dragon-code.pro/laravel-ready/laravel-starter.svg?brand=laravel)](https://github.com/laravel-ready/laravel-starter)

Ready to use empty laravel starter project template. It has a simple and clean project structure with many features for development and debugging. When you decide to won't use some tools you can remove them quickly, then you can continue to develop.

See the more details in the [README.md](src/README.md) file.

## 🐳 Docker

This project comes with a docker stack for laravel. It contains: [Dockerfile](https://github.com/laravel-ready/laravel-starter/blob/main/src/Dockerfile) with [serversideup/php](https://github.com/serversideup/docker-php/) image for Laravel app, [MySQL](https://hub.docker.com/_/mysql), and [Redis](https://hub.docker.com/_/redis) containers.

`docker-compose.yml` use `.env` file for configurations. So, you need to rename `.env-example` to `.env` and fill it with your own credentials. Then you can run `docker-compose up -d` to start the stack.

## 💧 Versioning

This project follows laravel major versioning and every minor and patch version is about to be this template.