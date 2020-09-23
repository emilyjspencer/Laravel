<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show($book)

    {
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

    }

}
