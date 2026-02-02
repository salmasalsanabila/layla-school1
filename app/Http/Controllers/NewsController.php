<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
     public function library()
    {
        return view('front.newslibrary');
    }

     public function art()
    {
        return view('front.newsart');
    }


    public function newsfair()
    {
        return view('front.newsfair');
    }
}
