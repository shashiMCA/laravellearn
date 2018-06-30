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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/verify/{email}/{token}','Auth\RegisterController@verifybyemail');
Route::get('post/show','PostController@index');
Route::get('post','PostController@create')->name('createpost');
Route::post('post','PostController@store')->name('createpost');
Route::get('post/update/{post}','PostController@show');
Route::get('post/{post}/edit','PostController@edit');
Route::post('post/update','PostController@update');
