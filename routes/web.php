<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route : default
Route::get('/', function () {
    return view('welcome');
});

Route::get('home', 'Home@index');
Route::group(['prefix'=>'home'], function(){
	Route::get('index', 'Admin\HomeController@index');
});

// Route : users
Route::group(['prefix'=>'user'], function() {
	Route::get('index','Admin\UserController@index');
});
