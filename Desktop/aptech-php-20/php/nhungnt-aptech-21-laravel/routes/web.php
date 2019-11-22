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
Route::get('/articles', 'ArticleController@index')->name('articles.index');
Route::get('/articles/create', 'ArticleController@create');
Route::post('/articles', 'ArticleController@store');
Route::get('/articles/{id}', 'ArticleController@show');
Route::delete('/articles/{id}', 'ArticleController@destroy');
Route::get('/articles/{id}/edit', 'ArticleController@edit');
Route::put('/articles/{id}','ArticleController@update')->name('articles.update');

