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

/* Route Landing Page */
Route::get('/', function () {
    return view('landingPage.master');
});
/* End Route Landing Page */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
