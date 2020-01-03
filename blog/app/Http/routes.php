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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/posts', 'PostController@index')->name('posts.index') ;
Route::get('/posts/create', 'PostController@create')->name('posts.create') ;
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('posts.show') ; ///{} this means a dynamic content : variable that takes its value from the entered url
Route::get('/posts/{post}/edit', 'PostController@edit')->name('posts.edit') ; ///{} this means a dynamic content : variable that takes its value from the entered url
Route::put('/posts/{post}', 'PostController@update')->name('posts.update') ; ///{} this means a dynamic content : variable that takes its value from the entered url
Route::delete('/posts/{post}', 'PostController@destroy')->name('posts.destroy') ; ///{} this means a dynamic content : variable that takes its value from the entered url

