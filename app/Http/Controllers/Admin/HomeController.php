<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show()  
	{
	     return view('admin/article/index')->withArticles(Article::all());
	}
}
