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
/*默认页面*/
Route::get('/', 'BaseController@index');
Route::get('/home', 'BaseController@index');
/*对应模块组*/
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function() {  
    // Route::get('article', 'ArticleController@index');
    // Route::get('article/create', 'ArticleController@create');
    // 自动增加基础的请求方法
    Route::resource('article', 'ArticleController'); // 文章管理
    Route::resource('home', 'IndexController');  // 主页信息
});


