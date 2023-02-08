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

Route::get('/', 'Controller@HomePage');
Route::get('/contact', 'Controller@Contact');
Route::get('/about_us', 'Controller@AboutUs');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
