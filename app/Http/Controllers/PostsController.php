<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show ($slug) 
  {

   // database connection
   // making  a query against the posts table 

   $post = Post::where('slug', $slug)->first();

   if (! $post) {
       abort(404);
   } 
    
    return view('post', [
        'post' => $post
    ]);
      
  }
}
