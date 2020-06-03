<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\Test;
use Illuminate\Support\Facades\Hash;

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

// Route::get('/', function () {
//     return Redirect::to('http://werner-ebert.de');
// });

// Route::get('/test', function ()
// {
//     return random_int (0, 1);
//     return Hash::make('asdasd');
// });

// Route::get('/also', function ()
// {
//     $fi = new FilesystemIterator("../storage/framework/sessions", FilesystemIterator::SKIP_DOTS);
//     return iterator_count($fi) - 1;
// });

// Route::get('/mail', function ()
// {
//     Mail::to("j.schneider@gemuesering.de")->send(new Test());
// });



Route::get('/Teilnahmebedingungen', function () {
    return view('teilnahmebedingungen', [
        'var' => [
            'not_passed' => 1,
            'active' => 'Teilnahmebedingungen'
        ]]);
});
Route::get('/Impressum', function () {
    return view('impressum', [
        'var' => [
            'not_passed' => 1,
            'active' => 'Impressum'
        ]]);
});
Route::get('/Datenschutz', function () {
    return view('datenschutz', [
        'var' => [
            'not_passed' => 1,
            'active' => 'Datenschutz'
        ]]);
});

Route::get('/', "TeilnehmerController@index");
Route::get('/Wir', function ()
{
    return view('ueberuns', [
        'var' => [
            'not_passed' => 1,
            'active' => 'UeberUns'
        ]]);
});
Route::get('/check', "TeilnehmerController@check");
Route::get('/teilnahme', "TeilnehmerController@index");
Route::post('/teilnahme', "TeilnehmerController@store");
Route::get('/teilnahme/{hash}', "TeilnehmerController@check_mail");

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/export', "HomeController@export");

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/akzeptieren', "TeilnehmerController@cookie");