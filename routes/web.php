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

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('/faq', 'WebsiteController@FAQ')->name('faq');
Route::get('/aboutUs', 'WebsiteController@AboutUs')->name('aboutUs');
Route::get('/contact', 'WebsiteController@Contact')->name('contact');




Route::namespace('Dashboard')->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('index', 'IndexController@index');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
