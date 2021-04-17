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

Route::get('welcome', function () {
    return view('welcome');
});

Route::resource('/', 'HomeController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('dasbor', 'DasborController@dasbor');
// Route::get('dasbor/post', 'DasborController@posting');
// Route::post('/dasbor', 'DasborController@post');
// Route::get('/dasbor/{id}', 'DasborController@destroy');
// Route::get('/dasbor/edit/{id}','DasborController@edit');
// Route::put('/dasbor/update/{id}','DasborController@update');
// Route::get('/dasbor/destroy/{id}', 'DasborController@destroy');
Route::resource('produk', 'DasborController');