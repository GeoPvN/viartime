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
*/

Route::get('/', function () {
    return view('master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getpost ', 'PostsController@getpost');

Route::post('home', 'PostsController@store')->name('store');
Route::get('post/{id}', 'PostsController@show')->name('show');

Route::post('star', 'RaitingController@star');


