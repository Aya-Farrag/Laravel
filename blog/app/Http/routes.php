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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', 'PostController@index')->name('posts.index')
-> middleware('auth') ;
Route::get('/posts/create', 'PostController@create')->name('posts.create') -> middleware('auth') ;
Route::post('/posts', 'PostController@store')-> middleware('auth') -> middleware('auth');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show') -> middleware('auth'); ///{} this means a dynamic content : variable that takes its value from the entered url
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit') -> middleware('auth'); ///{} this means a dynamic content : variable that takes its value from the entered url
Route::put('/posts/{post}', 'PostController@update')->name('posts.update') -> middleware('auth'); ///{} this means a dynamic content : variable that takes its value from the entered url
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy') -> middleware('auth') ; ///{} this means a dynamic content : variable that takes its value from the entered url


Route::auth();

Route::get('/home', 'HomeController@index');
