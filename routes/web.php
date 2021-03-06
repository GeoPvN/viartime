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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('chat/{id}', 'UserChatController@index')->name('chat');
Route::post('savechat', 'UserChatController@store')->name('savechat');

Route::get('user/{ip}', 'HomeController@show')->name('profile');

Route::get('/getpost ', 'PostsController@getpost');

Route::post('home', 'PostsController@store')->name('store');
Route::get('post/{id}', 'PostsController@show')->name('show');
Route::post('savepost', 'PostsController@save')->name('savepost');

Route::post('star', 'RaitingController@star');


Route::post('/post/{post}/comment', 'CommentController@store');
Route::get('rules', function(){
	return view('rules');
});