<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/about', 'App\Http\Controllers\HomeController@about');

Route::get('/add-img', 'App\Http\Controllers\ImagesController@add_img');

Route::post('/create', 'App\Http\Controllers\ImagesController@create');

Route::get('/show/{id}', 'App\Http\Controllers\ImagesController@show');

Route::get('/edit/{id}', 'App\Http\Controllers\ImagesController@editPage')->name('edit');

Route::post('/update/{id}', 'App\Http\Controllers\ImagesController@update');

Route::get('/delete/{id}', 'App\Http\Controllers\ImagesController@delete');
