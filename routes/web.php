<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;



Route::get('/', function () {
    return view('layout.welcome');
});

Auth::routes();

Route::get('/posts', 'App\Http\Controllers\PostController@index')->name('posts.index');

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create')->middleware('auth');

Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');

Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');

Route::get('/posts/edit/{id}', 'App\Http\Controllers\PostController@edit')->name('posts.edit');

Route::post('/posts/edit/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update');

Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/{user}', 'App\Http\Controllers\UserController@show')->name('users.show');

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comment.store');

Route::get('/comment/edit/{id}', 'App\Http\Controllers\CommentController@edit')->name('comment.edit');

Route::post('/comment/edit/{id}', 'App\Http\Controllers\CommentController@update')->name('comment.update');

Route::delete('/comment/{comment}', 'App\Http\Controllers\CommentController@destroy')->name('comment.destroy');

// Route::get('/send', 'NotifyController@index');

// Route::get('mail', function() {
//     $order = App\Order::find(1);

//     return (new App\Notifications\NewComment($order))
//                 ->toMail($order->user);
// });