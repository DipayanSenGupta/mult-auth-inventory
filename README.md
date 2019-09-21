# Laravel Multiple Authentication
A simple implementation of multiple authentication in Laravel.

To follow along, this application has been documented as an article on Pusher blog. You can read about it [here](https://pusher.com/tutorials/multiple-authentication-guards-laravel)

## Set up
To set up this project, first clone the repositiory
```bash
$ git clone git@github.com:DipayanSenGupta/mult-auth-inventory.git
```

Change your working directory into the project directory
```bash
$ cd mult-auth-inventory
```

Then install dependencies using [Composer](https://getcomposer.org/doc/00-intro.md)
```bash
$ composer install
```

Setup `.env`

Create the database file

## Run
Run the application with the following command
```bash
$ php artisan serve
```

Remember to visit `http://localhost:8000/register/writer` and `http://localhost:8000/register/admin` to register sales and admins respectively. Then visit `http://localhost:8000/login/writer` and `http://localhost:8000/login/admin` to login the sales and admins respectively.

`http://localhost:8000/products/index` to see the inventory from both `http://localhost:8000/writer` (sales) and `http://localhost:8000/admin`(admin). Checking out product `http://localhost:8000/products/checkoutIndex` is enabled from `http://localhost:8000/writer`and http://localhost:8000/products/create (product creation) & http://localhost:8000/products/history (product history) is enabled from admin vie

## Built With
[Laravel](https://laravel.com/) - The PHP Framework For Web Artisans.
