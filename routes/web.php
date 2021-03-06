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

 

Auth::routes();

//Profile Routes

Route::get('/profile/{user}', 'ProfileController@index')->name('profile.show');

Route::patch('/profile/update/{user}' , 'ProfileController@update')->name('profile.update');

Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');

//Post Routes
Route::get('/' , 'PostController@index');
Route::get('/post/create', 'PostController@create')->name('post.create');

Route::post('/post/store', 'PostController@store')->name('post.store');

Route::get('/post/show/{post}', 'PostController@show')->name('post.show');

// follow Route 

Route::post('/follow/{user}', 'FollowsController@store');
