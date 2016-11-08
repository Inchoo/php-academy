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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', 'IndexController@index');

Route::get('/form', 'FormController@form');
Route::post('/form', 'FormController@submit');
Route::get('/thankyou', 'FormController@thankyou');

Route::get('/admin', 'AdminController@index');

