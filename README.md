# Laravel-andersen

## Synopsis

This is a technical task from Andersen.

```
1) Init new repository on github/gitlab/bitbucket (https://github.com/)

2) Init new laravel project (https://laravel.com/docs/8.x/installation) 

3) Install mysql - create database for application

4) Create page where will be form with inputs:
 - name
 - email
 - message
and submit button.

 After click on submit button data should be sent and stored in database.
 At the bottom of the page should be place where we will see info about all sent messages:
 - name, email, message, create date

 5) Add validation in laravel application for input values:
 - name
 - email
 - message
```

## Run in container

1. **Clone repository**
   ```shell
   git clone git clone git@github.com:YvBis/laravel-andersen.git
   ```
2. **Go to folder**
   ```shell
   cd laravel-andersen
   ```
3. **Run**
    ```shell
   docker-compose up -d
   ```
    ```shell
   docker exec -u $(shell id -u) andersen-php composer install
   ```
    ```shell
   docker exec -u $(shell id -u) andersen-php php artisan migrate
   ```
   or
    ```shell
   make build
   ```
    ```shell
   make composer-install
   ```
    ```shell
   make migrate
   ```
4. Open `127.0.0.1:8000` in browser.
5. To stop the containers run `make stop` or `docker-compose stop`
## Local run
### Requirements

1. php 7.4+ plus extensions:
   - `intl`
   - `pdo`
   - `pdo_mysql`
2. Any laravel-compatible database(mysql, postgres, sqlite etc)
3. Composer

### Installation and Setup

1. **Clone repository**
   ```shell
   git clone git clone git@github.com:YvBis/laravel-andersen.git
   ```
2. **Go to folder**
   ```shell
   cd laravel-andersen
   ```
3. **Install dependencies**
   ```shell
     composer install
   ```
4. **Create and modify .env file**
   ```shell
   cp .env.example .env
   ```
5. **Generate app key**
   ```shell
   php artisan key:generate
   ```
6. **Migrate db**
   ```shell
     php artisan migrate
   ```
7. **Serve the site**
   ```shell
   php artisan serve
   ```
