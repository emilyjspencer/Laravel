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

### Controllers

* Create a controller:
```
php artisan make:controller controllerName
```

* In web.php - add the controller at the top of the file e.g.

use App\Http\Controllers\BookControllers;


near the bottom:
```
Route::get('/books{book}', [BooksController:class, 'show']);
```

* All controllers should extend the BaseController class - which is also where we might
put shared controller logic
* The Base class provides some convenience methods such as the middleware method

### Models

Laravel's ORM - Eloquent - provides an ActiveRecord implementation for working with the database.
* Just as with Rails, each database table has a corresponding Model which is used to interact
with the table.
* Models allow the developer to query the data in the database and add new data etc
* All Eloquent models extend
```
Illuminate\Database\Eloquent\Model
```


To create a model:

```
php artisan make:model Todo
```

### Migrations

Migrations allow you to define the structure of a table or make changes to an existing one.
* Can be considered as version control for the database as we can revert changes with the following command:
```
php artisan migrate:rollback
```

When making a change:
1:
```
php artisan migrate:rollback
```
2:
```
php artisan migrate
```

* To actually make a migration:
```
php artisan migrate
```

* To revert all changes:
```
php artisan migrate:reset
```

* Migration files live in the database folder and migrations subfolder
* Laravel comes with some migration files 'out of the box'
* The migration files will always contain an up() method and a down()
 method
* up() - for actually running the migrations/creating the table
* down() - for rolling back or undoing the migration or dropping the table

### Creating a model, controller and migration simulataneously

* Just a Rails provides generators to generate a model, controller and migration,
Laravel offers us the ability to generate a model, controller and migration with the following command:
```
php artisan make:model ModelName -mc
```

### Laravel's REPL

Just as Rails offers its own REPL - the Rails console, where we can manually add data and more generally manipulate data in the databases, Laravel also provides a REPL - psy
* This can be opened with the following command:
```
php artisan tinker
```

Then new records can be created:

```
$todo = new App\Models\ToDo;
$todo->description = 'Go for a run';
$todo->save();

This persists the data to the database

To return all data:
```
App\Models\ToDo::all();
```

To return the first item:
```
App\Models\ToDo::first();
```




### Views

### Views

A good structure for the views folder would be as follows:

views
  -- layouts
    - default.blade.php
    - sidebar.blade.php
  --pages
    - pageOne.blade.php
    - pageTwo.blade.php
    - pageThree.blade.php
    - pageFour.blade.php
    - pageFive.blade.php
  --includes
    head.blade.php
    header.blade.php
    footer.blade.php
    sidebar.blade.php


views/layouts/default.blade.php would have the general layout/structure
views/layout/sidebar.blade.php would contain the layout of the sidebar
views/pages/pageOne would contain the content specific to page one
(the same applies for all pages)
views/head.blade.php
views/header.blade.php - header
views/footer.blade.php - footer
views/sidebar.blade.php - sidebar

@includes is used to bring in code snippets
```
<header>
  @include('includes.header)
</header>

@yield is used to bring in content from invidual pages

@extends is used to extend the layout to individual pages

```
@extends('layouts.default')
@section('content')
  Content goes here
@stop or     @endsection

@section and @endsection are directives - they comes from Larave's Blade templating engine

@section and @endsection go in the individual page files

@yield goes in the layout file - layout.blade.php or layouts/default.blade.php and different things
can be yielded if needs be

A section needs to be created that corresponds to what is being yielded

* The request() helper function can be used to make selected menu items active/highlighted:

```
(request()-> is('/')) ? 'current_page_item' : '' }}
```


