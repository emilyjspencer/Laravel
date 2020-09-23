# Learning Laravel



### Learnings

I faced an issue with the database.
Was solved with the following:

* composer update
* composer require doctrin/dbal
* php artisan cache:clear
* php artisan view:clear
* php artisan route:clear
* Opened php.ini from desktop
* Uncommented ;extension-pdo_mysql by removing ;
* Restarted the Apache server
* Restarted mySQL


dd() - dump and die - is used to inspect variables and stop the execution

* Create a controller:

* php artisan make:controller controllerName

* In web.php - add the controller at the top fo the file e.g.

use App\Http\Controllers\BookControllers;


near the bottom:

Route::get('/books{book}', [BooksController:class, 'show']);



