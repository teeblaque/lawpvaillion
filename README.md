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

Download docker and install on your machine, then start

## Step 1 
Open a new instance of the terminal, navigate to the root directory of the project and execute the following command to bring all the containers up.

$ docker-compose up -d --build nginx mysql

## SET UP DATABASE
1. docker-compose up -d --build nginx phpmyadmin
2. Navigate to phpmyadmin with localhost:8081 and create your database (lawpvaillion in my case) with these credentials:

Hostname: mysql
Username: root
Password: root

## Step 2
When all containers are up and running, enter the app container by executing the following command.

$ docker-compose exec workspace bash

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

$ artisan key:generate

## Step 8
Run the database migrations.

$ artisan migrate

## Step 9
To access the CRM Application visit http://localhost

## Stopping the containers
1. To Exit the workspace.

$ exit

2. Bring all the containers down.

$ docker-compose down

3. To stop the containers

docker-compose stop

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
