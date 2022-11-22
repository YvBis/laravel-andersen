CREATE DATABASE  IF NOT EXISTS laravel COLLATE utf8mb4;
USE laravel;
CREATE USER 'laravel'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON 'laravel'.* TO 'laravel'@'localhost';
