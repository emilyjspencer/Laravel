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

    public function index() 
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
     {
      return view('articles.create');
    }

    public function store(Request $request) 
    {

        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);
       
        // persist the new article
      $article = new Article();
      $article->title = request('title');
      $article->excerpt = request('excerpt');
      $article->body = request('body');
      $article->save();
      return redirect('/articles');

    }

    public function edit($id)
     {
         $article = Article::find($id);

         return view('articles.edit', compact('article'));

    }

    public function update($id, Request $request)
     {

        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        $article = Article::find($id);
        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');
        $article->save();

        return redirect('/articles/' . $article->id);

    }

    public function destroy()
     {

         
    }
} 

