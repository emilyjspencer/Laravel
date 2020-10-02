<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function show($id)
    {
       $article = Article::find($id);

       return view('articles.show', ['article' => $article]);

    }

    public function index() {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }
} 
