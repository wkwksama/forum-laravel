<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/topics/create', 'TopicController@create')->name('topics.create');
Route::post('/topics/create', 'TopicController@store');

Route::get('/topics', 'TopicController@index');
Route::get('/topics/{slug}', 'TopicController@show');
Route::get('/topics/{slug}/edit', 'TopicController@edit')->name('topics.edit');
Route::post('/topics/{slug}/edit', 'TopicController@update');

Route::post('/channel/{slug}', 'TopicController@channel')->name('topics.channel');
