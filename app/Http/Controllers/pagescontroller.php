<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class pagescontroller extends Controller
{
    //
    function index()
    {
    return view('welcome');
    }
    function blog()
    {
    $posts=post::all();      
    return view('blog',['posts'=>$posts]);
    }
}
