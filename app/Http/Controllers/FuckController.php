<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuckController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('fuck');
    }

    public function test()
    {
        throw new \Exception("我故意的", 1);
        echo 'this is test';
    }
}
