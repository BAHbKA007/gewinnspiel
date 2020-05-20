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
    return Redirect::to('http://werner-ebert.de');
});

Route::get('/da39a3ee5e6b4b0d3255bfef95601890afd80709', "TeilnehmerController@index");
Route::post('/', "TeilnehmerController@check");

Auth::routes(['register' => false]);

#Route::get('/home', 'HomeController@index')->name('home');
