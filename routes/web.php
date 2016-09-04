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

Route::get('/', 'WelcomeController@index');
Route::get('/memories/approve/{id}', 'MemoryApprovalController@update');

Route::get('/api/memories', 'MemoryController@index');
Route::post('/api/memories', 'MemoryController@store');
