<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show ($slug) 
  {

   // database connection
   // making  a query 

   $post = Post::where('slug', $slug)->firstOrFail();

  
    
    return view('post', [
        'post' => $post
    ]);
      
  }
}
