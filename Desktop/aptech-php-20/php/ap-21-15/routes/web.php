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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{id}', 'PostController@show');
Route::delete('/posts/{id}', 'PostController@destroy');
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}','PostController@update')->name('posts.update');
//Route::resource('/posts', 'PostsController');






