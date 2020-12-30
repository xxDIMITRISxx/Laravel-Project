<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('layout.welcome');
});

Auth::routes();

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create')->middleware('auth');

Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');

//Route::get('/posts/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit')->middleware('auth');

Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{user}', 'App\Http\Controllers\UserController@show')->name('users.show');

//Route::get('/profile/{user}', 'App\Http\Controllers\UserController@show')->name('users.show');

Route::get('/posts/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
