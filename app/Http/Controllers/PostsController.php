<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function show ($post) 
  {

    $posts = [
        'post-one' => 'Hi there',
        'post-two' => 'Bye',
        'post-three' => 'Very wintery today',
        'post-four' => 'Still freezing'
    ];

    if( !array_key_exists($post, $posts)) {
        abort(404, 'Sorry, post unavailable');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
      
  }
}
