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
Route::get('/test', function () {
    return view('layouts/app3');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('contact', 'PagesController@contact');
Route::get('about', 'PagesController@about');

Route::get('/articles','ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create','ArticlesController@create')->name('articles.create');
Route::get('/articles/{article}','ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit','ArticlesController@edit')->name('articles.edit');
Route::put('/articles/{article}','ArticlesController@update');
