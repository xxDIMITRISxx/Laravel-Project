<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('layout.welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostController@index');

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');

Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');

Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');