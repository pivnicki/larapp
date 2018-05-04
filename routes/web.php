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

Route::get('/','PagesController@index');

Route::get('/about',function(){
	return view('pages.about');
});

Route::get('/services',function(){
	return view('pages.services');
});

Route::resource('posts','PostsController');

Route::get('/blog','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}/edit','PostsController@edit');
Route::get('/posts/{id}/destroy','PostsController@destroy');