<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/books/{book}', function($book) {

    $books = [
        'book-one' => 'Frankenstein',
        'book-two' => 'Proust and the Squid',
        'book-three' => 'Out of Africa',
        'book-four' => 'Five on Brexit Island',
        'book-five' => 'Year of Wonder',
        'book-six' => '#Girlboss'
    ];

    if(! array_key_exists($book, $books)) {
        abort(404, 'Sorry, that page was not found');
    }

    return view('book', [
        'book' => $books[$book]
    ]);
});


