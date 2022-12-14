# docker
start:
	docker-compose up -d

build:
	docker-compose up -d --build

stop:
	docker-compose stop
restart:
	docker-compose stop
	docker-compose start

rebuild:
	docker-compose stop
	docker-compose pull
	docker-compose rm --force php-fpm
	docker-compose rm --force nginx
	docker-compose rm --force mariadb
	docker-compose rm --force phpmyadmin
	docker-compose build --no-cache --pull
	docker-compose up -d --force-recreate

# container
php:
	docker exec -u $(shell id -u) andersen-php bash
nginx:
	docker exec -u $(shell id -u) andersen-php bash

set-up-storage:
	docker exec -u 0 andersen-php chown -R www-data:www-data /var/www/laravel/storage/

migrate:
	docker exec -u $(shell id -u) andersen-php php artisan migrate

migrate-fresh:
	docker exec -u $(shell id -u) andersen-php php artisan migrate:fresh

seed:
	docker exec -u $(shell id -u) andersen-php php artisan db:seed
# composer
composer-install:
	docker exec -u $(shell id -u) andersen-php composer install

composer-update:
	docker exec -u $(shell id -u) andersen-php php composer update
