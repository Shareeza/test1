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

Route::get('/', function () {
    return view('welcome');
});

Route::get('contact', function () {
    return 'hello';
});

Route::get('contact/{id}', function ($id) {
    return 'User '.$id;
});


Route::get('cd','abcController@index');
Route::get('/cd/{id}', 'abcController@show');



Route::get('/home', function () {

    //return "Hello world";
    return view('welcome');
});

Route::get('/cds/store', 'abcController@store');
Route::get('/cds/create', 'abcController@create');
Route::get('/cd/delete/{id}', 'abcController@destroy');
Route::get('/cd/updateForm/{id}' , 'abcController@updateForm');
Route::post('/cd/update/{id}', 'abcController@update');



