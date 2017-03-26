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

  
    public function index()
    {
        // return view('base')->withMenus(Admin\Menu::all()) ;

        $article = new Admin\ArticleController;

         // $data = DB::table('articles')->where('id',16)->first();
        $info = $article->getFind();
        var_dump($info) ;
        exit();
        return view('base')->withMenus(Admin\ArticleController::all()); ;
    }
}
