<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function (){
    return view('welcome');
});
Route::get('/index', function(){
    return view('show.index');
});
Route::get('/login', function(){
    return view('login');
});

Route::get('/see','ShowController@index');
Route::get('/look','ShowController@show');
Route::get('/submenushow', 'ShowController@submenushow');

Route::post('/login', 'SitesController@login');   //登录
Route::post('/store','SitesController@store');
Route::get('/logout','SitesController@logout');    //退出登录
Route::get('/admin',function(){
    return view('admin.admin');
});

Route::get('/insert', function(){
    return view('admin.insert');
});
//后台展示路由
Route::get('/show','SitesController@show');
Route::get('/destroy','SitesController@destroy');
