<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

  public function welcome()
  {
    return view('welcome');
  }

  public function list()
  {
    //DBデータをまとめてもらう
    $posts = Post::all();

    return view('list', [
      "posts" => $posts
    ]);
  }

}
