## Table of contents

- [Introduction](#Introduction)
- [Features](#Features)
- [Requirements](#Requirements)
- [Explanation](#Explanation)
- [Installation](#Installation)
- [Unit Testing](#Unit_Testing)

## Introduction

A [Laravel](https://laravel.com) simple authentication and authorization application that demonstrates software design patterns, and problem solving skills.

## Features

- JWT Login Authentication.
- User registration.
- Reset Password mail notification.
- Role based access control.

## Requirements

- PHP version 8.0 or higher (PHP 8.2.12 recommended).
- Composer.
- Node.js and NPM (for frontend dependencies).
- MySql.

## Explanation

This section contains an explanation of the tools used in this project.

- **Laravel Framework** <br/>
 Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).<br/>

- **MySQL as the Database** <br/>
 MySQL is faster, and more widely used..

- **EloquentORM as the ORM Library** <br/>
  [EloquentORM](https://laravel.com/docs/eloquent) is built for Laravel and is recommended when using Laravel.

- **Tailwind CSS library** <br/>
  [TailwindCSS](https://v2.tailwindcss.com/docs/guides/laravel) enhances the development experience by streamlining the styling process and ensures a consistent and maintainable design system throughout the application.

## Installation

- To install this project and run it locally, clone the project on github or download the zip file, navigate to the root directory and run `composer install` to install the required packages. Then follow the step by step guide.

- Copy the example environment file to create your own environment file.
 `cp .env.example .env`

- Generate a new application key.
    `php artisan key:generate`

- Generate a new JWT secret key.
    `php artisan jwt:secret`

- Open .env and set up your database and other environment variables
    ```
        DB_CONNECTION=mysql
        DB_HOST=db_ip_address
        DB_PORT=db_port_number
        DB_DATABASE=database_name
        DB_USERNAME=database_username
        DB_PASSWORD=database_password
    ```

    # JWT Secret
    JWT_SECRET=jwt_secret

    # Add mail configurations

- Apply the database migration command below to create the Roles table first.
    `php artisan migrate --path=/database/migrations/2024_08_12_223642_create_roles_table.php`

- Apply the database migrations for other tables.
    `php artisan migrate`

- Run seeders to populate the database with sample data.
    `php artisan db:seed`

- Install the frontend dependencies.
    `npm install`

- Compile the frontend assets.
    `npm run build` 

- Start the Laravel development server.
    `php artisan serve`

The application should now be running on the address specified in the terminal.


## Unit_Testing

A unit test was also added to this project. The unit tests were written using PHPUnit.

`php artisan test`

THANK YOU.