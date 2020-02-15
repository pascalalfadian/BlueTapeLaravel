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

Route::get('google', 'GoogleController@redirect');
Route::get('google/callback', 'GoogleController@callback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
