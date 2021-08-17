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

Route::get('/post/{id}', 'PostController@list');
Route::get('/post/{pref_id}?style={id}', 'PostController@ListChange');

Route::get('/post/create/{id}', 'PostController@create');
Route::post('/post/create', 'PostController@post');
Route::get('/post/edit/{token}', 'PostController@edit');
Route::post('/post/update/{token}', 'PostController@update');
Route::get('/post/detail/{token', 'PostController@detail');


Route::get('/setting', 'PostController@setting');
Route::post('/setting', 'SettingController@update');
