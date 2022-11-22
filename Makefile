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
	docker-compose exec -u $(shell id -u) andersen-php bash
nginx:
	docker-compose exec -u $(shell id -u) andersen-php bash

migrate:
	docker-compose exec -u $(shell id -u) andersen-php php artisan migrate

migrate-fresh:
	docker-compose exec -u $(shell id -u) andersen-php php artisan migrate:fresh

seed:
	docker-compose exec -u $(shell id -u) andersen-php php artisan db:seed
# composer
composer-install:
	docker-compose exec -u $(shell id -u) andersen-php php composer install

composer-update:
	docker-compose exec -u $(shell id -u) andersen-php php composer update
