## Laravel Modules
#Working with modules in laravel project

```bash
# install package
composer install

# execute migrations for blog module
php artisan module:migrate Blog

# if you want automatically  populate you blog database
php artisan module:seed Blog

# run server
php artisan serve 
```

# How to install modules 
```bash
# install laravel modules package
composer require nwidart/laravel-modules

# Optionally, publish the package's configuration file by running:
php artisan vendor:publish --provider="Nwidart\Modules\LaravelModulesServiceProvider"

```

# Autoloading
```bash
# create folder Modules et edit composer.json in root of project
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}

# run to refresh autoloading:
composer dump-autoload

```
# Quick example
```bash
#create new modules
php artisan module:make <module-name>
# for example
php artisan module:make Blog

#if you don't want default resources like seed, controller, etc.
php artisan module:make Blog --plain
# or
php artisan module:make Blog -p

# Create migrations 
php artisan module:make-migration create_blogs_table Blog

# create model with migration : first Blog is name of model and second name of module Blog, -m: to generate database migration
php artisan module:make-model Blog -m Blog

# execute migrations
php artisan module:migrate Blog

# Create controller 
php artisan module:make-controller BlogController Blog


# Creating seeders
php artisan module:make-seed BlogTableSeeder Blog
# and run seeder
php artisan module:seed Blog
```