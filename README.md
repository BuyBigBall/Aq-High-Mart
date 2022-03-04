<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel-Advance-ECommerce
It is a Laravel 8 blade template based demo project reflecting advance features of a single vendor ecommerce platform. Build with love and open source for developers. 

1. Bootstrap 4.6
2. laravel/jetstream 
3. laravel/sanctum: ^2.11 
4. intervention/image: ^2.5
5. Sweet Alert 2.0
6. Notification Alert -Toastr
7. Datatables

## Getting Started Step by Step
1. In your root folder, clone the project file using git clone https://github.com/rafi021/Laravel-Advance-Ecommerce.git
2. Open terminal (bash/cmd). Then go to project folder using command

```sh
cd Laravel-Advance-Ecommerce
```

3. Then install required files and libraries using 

```sh
composer install
```

4. Then create a .env file and generate key for this project using command 

```sh
cp .env.example .env

php artisan key:generate
```

5. Then compile all CSS & JS files together using this command

```sh
npm install && npm run dev
```

or

```sh
yarn install && yarn run dev
```
6. Create a database in MYSQL and connect it with your project via updating .env file.
7. After connecting the db with project, then run command 

```sh
php artisan migrate:fresh --seed
```

After completing the migration and seeding of db, you will have 2 user ready for login in this project. 
A.  Admin -> Admin
    Email -> admin@gmail.com
    Pass -> 12345678

B.  User -> User
    Email -> user@gmail.com
    Pass -> 12345678

Finally we are ready to run our project using this command 

```sh
php artisan serve
```




<h1>Migration Generate</h1>

<h2>Install</h2>

The recommended way to install this is through composer:

    <b>composer require --dev "kitloong/laravel-migrations-generator"</b>

Laravel Setup

Laravel will automatically register service provider for you.


<h2>Usage</h2>

To generate migrations from a database, you need to have your database setup in Laravel's config (config/database.php).


To create migrations for all the tables, run:

    <b>php artisan migrate:generate</b>

You can specify the tables you wish to generate using:

php artisan migrate:generate --tables="table1,table2,table3,table4,table5"

You can also ignore tables with:

php artisan migrate:generate --ignore="table3,table4,table5"

Laravel Migrations Generator will first generate all the tables, columns and indexes, and afterwards setup all the foreign key constraints.

So make sure you include all the tables listed in the foreign keys so that they are present when the foreign keys are created.

You can also specify the connection name if you are not using your default connection with:

php artisan migrate:generate --connection="connection_name"

Squash migrations

By default, Generator will generate multiple migration files for each table.

You can squash all migrations into a single file with:

php artisan migrate:generate --squash

Options

Run php artisan help migrate:generate for a list of options.

Options	Description

-c, --connection[=CONNECTION]	The database connection to use

-t, --tables[=TABLES]	A list of Tables or Views you wish to Generate Migrations for separated by a comma: users,posts,comments

-i, --ignore[=IGNORE]	A list of Tables or Views you wish to ignore, separated by a comma: users,posts,comments

-p, --path[=PATH]	Where should the file be created?

-tp, --template-path[=TEMPLATE-PATH]	The location of the template for this generator

--date[=DATE]	Migrations will be created with specified date. Views and Foreign keys will be created with + 1 second. Date should be in format suitable for Carbon::parse

--table-filename[=TABLE-FILENAME]	Define table migration filename, default pattern: [datetime_prefix]\_create_[table]_table.php

--view-filename[=VIEW-FILENAME]	Define view migration filename, default pattern: [datetime_prefix]\_create_[table]_view.php

--fk-filename[=FK-FILENAME]	Define foreign key migration filename, default pattern: [datetime_prefix]\_add_foreign_keys_to_[table]_table.php

--default-index-names	Don't use db index names for migrations

--default-fk-names	Don't use db foreign key names for migrations

--use-db-collation	Follow db collations for migrations

--skip-views	Don't generate views

--squash	Generate all migrations into a single file

Thank You

Thanks to Bernhard Breytenbach for his great work. This package is cloned from https://github.com/Xethron/migrations-generator.

Thanks to Jeffrey Way for his amazing Laravel-4-Generators package. This package depends greatly on his work.


<H2>Seed Generate Package</H2>
    <b>composer require orangehill/iseed</b>


<h2>Seed Generate</h2>

<b>
php artisan iseed admins,brands,categories,coupons,failed_jobs,images,migrations,money_hists,options,order_items,orders,password_resets,personal_access_tokens,products,products,sessions,ship_districts,ship_divisions,ship_states,sliders,sub_categories,sub_sub_categories,users,wishlists
</b>