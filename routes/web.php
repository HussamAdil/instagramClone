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
    return view('welcome');
});

Auth::routes();

#Profile Routes

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');

#Post Routes

Route::get('/post/create', 'PostController@create')->name('post.create');

Route::post('/post/store', 'PostController@store')->name('post.store');
