# Laravel-login-register

A simple login, register web application.

> Note: The frontend is developed using laravel blade template.

## Requirements

This web application is built under Laravel Version 5.4 with the following configurations. Make sure your server meets the following requirements:

- Git ready [https://git-scm.com/downloads](https://git-scm.com/downloads)
- Composer ready [https://getcomposer.org/](https://getcomposer.org/)
- PHP Version >= 5.6.4
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Installation

```bash
# Clone this repository
git clone https://github.com/philipmorrisp/laravel-login-register.git

# Composer install dependencies, only to ensure the composer autoloader is ready.
composer install
```

## Setup

Copy `.env.example` to `.env`. You may need to change the database configuration.

Please ensure the existence of database. YOu may need to create the database.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret
```

Generate an application key for your application.

```bash
# Create a unique application key
php artisan key:generate
```

After the above is ready, you can move onto the migrations:

> Note: Please ensure the cmd current directory path is in this project directory.

```bash
# Do table migration
php artisan migrate --seed

# Run this command when database reset with seed is needed
php artisan migrate:refresh --seed

# Run this command when database reset without seed is needed
php artisan migrate:refresh  
```

## Run
```bash
# Brower open http://localhost:8000
php artisan serve
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).