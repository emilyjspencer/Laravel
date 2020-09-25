<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/emily', function () {
    return view('emily');
});

Route::get('/booklist', function () {
    return view('booklist');
});

route::get('/songlist', function () {
    return view('songlist');
});


Route::get('/jane', function () {

    $name = request('name');

    return view('jane', [
        'name' => $name
    ]);
    
});

Route::get('/films/{wild}', function () {
    return view('test');
});

Route::get('/songs/{wild}', function ($wild) {
  return $wild;
});

Route::get('/pizzas/{topping}', function ($topping) {
    return $topping;
});

Route::get('/jewellery/{earring}', function ($earring) {
    return $earring;
});

Route::get('/', function() {
    return view('contact');
});



Route::get('/books/{book}', [BooksController::class, 'show']);


