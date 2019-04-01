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


//首页
Route::get('/','ShowController@indexshow');
Route::get('/index','ShowController@indexshow');

//文章标题列表
Route::get('/see','ShowController@index');
//文章内容展示
Route::get('/look','ShowController@show');

//菜单栏单页显示
Route::get('/submenushow', 'ShowController@submenushow');

//跳转后台登陆
Route::get('/login', function(){
    return view('login');
});
//接收登录请求
Route::post('/login', 'SitesController@login');
//跳转后台主界面
Route::get('/admin',function(){
    return view('admin.admin');
});
//退出登录
Route::get('/logout','SitesController@logout');

//后台展示路由
Route::get('/show','SitesController@show');

//后台增加文章
Route::get('/insert', function(){
    return view('admin.insert');
});
//后台删除上传文章
Route::get('/destroy','SitesController@destroy');

//后台文件上传
Route::post('/store','SitesController@store');
