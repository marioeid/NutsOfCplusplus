<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
class TagsController extends Controller
{
    //
    public function index()
    {

      $posts=$tag->posts();
      return view('blog',compact('posts'));
    }

    public function store(Tag $tag)
    {
      
    }
}
