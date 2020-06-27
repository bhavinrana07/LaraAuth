# LaraAuth

A Laravel app with Login, Registration and simple CRUD operations. 
## About

LaraAuth is built with [Laravel 7](https://laravel.com/docs/7.x/authentication) with user authentication, registration with email confirmation, password recovery, Remember me. Uses official Bootstrap 4. I've used Gate for the permissions.

### Installation Instructions
1. Run `git clone https://github.com/bhavinrana07/LaraAuth.git laraAuth`
2. Create a MySQL database for the project
    
     ```create database laraAuth;```
     
4. Configure/change your database connection details in `.env` file
5. Run `composer update` from the projects root folder

7. From the projects root folder run `sudo chmod -R 755 ../laravel-auth`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`

#### Build the Front End Assets with Mix
##### Using NPM:
1. From the projects root folder run `npm install`
2. From the projects root folder run `npm run dev` or `npm run production`
  * You can watch assets with `npm run watch`


## Features
- Migration and seed scripts, 
- Login Registration with Laravel Auth
- Users and Roles Management 

## Screenshots


