## INSTALLATION

PHP 7.3+, and Composer are required.

Clone this project

## CONFIGURATION

You'd need to run composer install

Then run cp .env.example .env in your terminal

Run php artisan key:generate

Run Php artisan migrate

## To Serve the project

php artisan serve

## CONFIGURATION WITH DOCKER

## Prerequisites:

Clone the project

Download docker and install on your machine

## Step 1 
Open a new instance of the terminal, navigate to the root directory of the project and execute the following command to bring all the containers up.

$ docker-compose up -d

## Step 2
When all containers are up and running, enter the app container by executing the following command.

$ docker-compose exec lawpavillion_app bash

## Step 3
Install all composer packages included in composer.json

$ composer install

## Step 4
Install all npm packages included in package.json

$ npm install

## Step 5
Run all mix tasks.

$ npm run dev

## Step 6
Create a .env file from the existing .env.example

$ cp .env.example .env

## Step 7
Generate a Laravel App Key.

$ php artisan key:generate

## Step 8
Run the database migrations.

$ php artisan migrate

## Step 9
Modify the following fields in your .env file to use the values specified in the database container.

DB_CONNECTION=mysql
DB_HOST=lawpavillion_db
DB_PORT=3306
DB_DATABASE=lawpavillion
DB_USERNAME=root
DB_PASSWORD=root

## Step 10
To access your Laravel Application visit http://localhost:8000

## Stopping the containers
1. Exit the app container.
$ exit

2. Bring all the containers down.
$ docker-compose down

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
