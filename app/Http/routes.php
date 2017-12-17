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

Route::get('/login', function(){
    return view('login');
});

Route::post('/login', 'SitesController@login');   //登录
Route::post('/store','SitesController@store');
Route::get('/logout','SitesController@logout');    //退出登录
Route::get('/admin',function(){
    return view('admin.admin');
});
Route::get('/insert', function(){
    return view('admin.insert');
});
Route::get('/dync', function(){
    return view('admin.dync');
});
Route::get('/poly', function(){
    return view('admin.poly');
});
Route::get('/othe', function(){
    return view('admin.othe');
});
Route::get('/poin', function(){
    return view('admin.poin');
});
Route::get('/know', function(){
    return view('admin.know');
});