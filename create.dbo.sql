CREATE DATABASE laravel_project;

CREATE USER 'laravel_user'@'localhost' IDENTIFIED BY 'p@55W0rd';

GRANT ALL PRIVILEGES ON laravel_project.* TO 'laravel_user'@'localhost';
