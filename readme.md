# Passport-Multiauth Demo

This project is an implementation sample using the package [Passport-Multiauth](https://github.com/sfelix-martins/passport-multiauth).

## Packages

* Laravel Framework 5.6.*
* Laravel Passport ^7.0
* Passport-Multiauth ^3.0

## Installation

Clone project and access the project folder:
```bash
git clone https://github.com/sfelix-martins/passport-multiauth-demo.git
cd passport-multiauth-demo
```

Copy the `.env.example` to `.env` file and set your local configurations:
```bash
cp .env.example .env
```

Install dependencies:
```bash
composer install
```

Generate the encryption key:
```bash
php artisan key:generate
```

Migrate database (Don't forget of configure your database credentials on .env file):
```bash
php artisan migrate
```

Install laravel passport
```bash
php artisan passport:install
```

## Using

To create an access token you can use the route `/api/login` to create an personal access token or `oauth/token` to use the default laravel passport.

To use the route `api/login` you need pass the params `username`, `password` and `provider`. 
The code will try login the user and generate an access token.

The `oauth/token` route just add a new param `provider` to default laravel passport route.

## Important files

* Config
    * `config/auth.php`
    * `App\Providers\AuthServiceProvider`
    * `App\Http\Kernel`
* Migrations
    * `database/migrations/*`
* Seeders
    * `database/seeds/UsersTableSeeder.php`
* Entities
    * `App\Admin`
    * `App\User` 
 * Routes
    * `routes/api.php`
 * Controllers
    * `App\Controllers\LoginController`
 * Services
    * `App\Model\Authenticator` 

## Todo

* Add unit tests 
* Add instructions to use with [laradock](http://laradock.io/) environment
* Improve documentation
