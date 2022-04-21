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

Route::get('/', 'frontController@index');
Route::get('/adduser', 'frontController@add');
Route::post('send', 'HomeController@calculat');

Auth::routes();

Route::get('/', 'HomeController@index')->name('');
