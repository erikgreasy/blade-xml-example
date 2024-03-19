# Create XML with Laravel Blade
This is an example Laravel 11 project, to showcase creating an XML with Laravel Blade.

You can find the Medium article here: https://medium.com/@erik.masny/create-xml-feeds-with-laravel-blade-9a4f039f6843

## Requirements
- PHP 8.2
- Composer

## Setup
Clone the repository
```
git clone git@github.com:erikgreasy/blade-xml-example.git
```

Install composer deps
```
composer install
```

Migrate and fill database
```
php artisan migrate:fresh --seed
```

You can check the feed at: `/product-feed.xml`

## Troubleshooting
You may encounter the following error with Laravel Herd: **syntax error, unexpected identifier "version"**.
This is because Laravel Herd enables short PHP tags by default. You can fix this by setting following in php.ini:
```
short_open_tag=off
```
