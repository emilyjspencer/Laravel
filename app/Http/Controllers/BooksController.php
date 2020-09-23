<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function show($slug)

    {
    

        $book = \DB::table('books')->where('slug', $slug)->first();


        

    
 

    

    return view('book', [
        'book' => $book
    ]);

    }

}
