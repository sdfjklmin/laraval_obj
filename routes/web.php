<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
#  

*/
 /*默认首页*/
// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();
Route::get('/', 'HomeController@index');
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {  
    Route::get('/', 'HomeController@index');
    // Route::get('article', 'ArticleController@index');
    // Route::get('article/create', 'ArticleController@create');
    Route::resource('article', 'ArticleController'); // 会自动增加基础的请求方法
    Route::resource('index', 'IndexController'); // 会自动增加基础的请求方法
});


