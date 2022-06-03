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

Route::view('/', 'home')->name('home');
Route::view('contact', 'contact')->name('contact');
Route::view('about-us', 'about')->name('about');

Route::get('rooms', 'RoomsController@index')->name('rooms.index');
Route::get('offers', 'OffersController@index')->name('offers.index');


