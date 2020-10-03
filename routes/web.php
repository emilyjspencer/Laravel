<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;

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

Route::get('/test', function() {
    return view('test');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/template', function() {
    return view('template');
});

Route::get('/about', function() {
  $articles = App\Models\Article::take(4)->latest()->get();

     return view('about', [
         'articles' => $articles
     ]);
});

Route::get('/ourclients', function() {
    return view('ourclients');
});

Route::Get('/careers', function() {
    return view('careers');
});





Route::get('/articles', [ArticlesController::class, 'index']);

Route::post('/articles', [ArticlesController::class, 'store']);



Route::get('/articles/create', [ArticlesController::class, 'create']);

Route::get('/posts/{post}', [PostsController::class, 'show']);




Route::get('/articles/{article}', [ArticlesController::class, 'show']);

Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);

Route::get('/articles/{article}', [ArticlesController::class, 'update']);