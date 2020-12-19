<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('layout.welcome');
});

Route::get('/posts', 'App\Http\Controllers\PostController@index');

// Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');

// Route::get('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.singlePost');