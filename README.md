<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel_Task

This a simple Laravel Application where you can create users. The users can update their profile. Only, the logged in users, can create, update and delete the pages.

## Setup

Download the repository from :

1. Run composer install to Install Dependencies.
2. In the .env file, add database information by filling the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME and DB_PASSWORD options to match the credentials of the database you just created.
3. Migrate the database: php artisan migrate. 

```bash
php artisan migrate
```

## Structure

```python


# Everything is quite similar to default laravel structure

# All routes in routes\web.php



## Task Completed
1. User Login system
2. Users can change their password
3. Users can create pages.
4. Users can see the list of pages.
5. Users can edit and delete pages.
6. Validation has been applied.
7. Faker libraries has been used to create pages.
8. As there is a long list of pages, so pagination has been applied.
9. Application has been secured by the middleware. (except: index page and the list page)



Thank you!

Bijaya Majhi
https://github.com/bijaya143