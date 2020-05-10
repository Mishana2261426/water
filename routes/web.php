<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/image', function () {
    return view('load');
});

Route::post('/image/upload', 'ImageController@upload')->name('image.upload' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'HomeController@index')->name('home');

Route::get('/home/add', 'HomeController@add');
Route::post('/home/add', 'HomeController@store');

Route::get('/home/update/{id}', 'HomeController@update');
Route::post('/home/update/{id}', 'HomeController@send');

Route::get('/home/delete/{id}', 'HomeController@delete');


