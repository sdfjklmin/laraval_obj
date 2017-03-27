<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

  /*base
  */
    public function index()
    {
        return view('base');
         // return view('home')->withArticles(\App\Article::all());
    }
}
