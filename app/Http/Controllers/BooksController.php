<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\Book;



class BooksController extends Controller
{
    public function show($slug)

    {
    
        $book = Book::where('slug', $slug)->firstOrFail();
   
    

        return view('book', [
          'book' => $book
        ]);

    }

}
