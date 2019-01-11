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

Route::get('/index', function () {
    return view('index');
});

Route::get('/keuze', function () {
    return view('keuze');
});

Route::get('/keuzevrienduitnodiging', function () {
    return view('keuzevrienduitnodiging');
});

Route::get('/spelkeuze', function () {
    return view('spelkeuze');
});
Route::get('/profiel', function () {
    return view('profiel');
});



Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('spelkeuze', ['as' => 'spelkeuze','uses'=>'KeuzeController@spelkeuze']);

Route::get('keuzevrienduitnodiging', ['as' => 'keuzevrienduitnodiging','uses'=>'KeuzeController@keuzevrienduitnodiging']);

Route::get('profiel', ['as' => 'profiel','uses'=>'KeuzeController@profiel']);