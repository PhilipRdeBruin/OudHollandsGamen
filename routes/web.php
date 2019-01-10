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

<<<<<<< HEAD
Route::get('/keuzevrienduitnodiging', function () {
    return view('keuzevrienduitnodiging');
});


=======
Route::get('/spelkeuze', function () {
    return view('spelkeuze');
});

>>>>>>> 76cf5e8dfa26f019ccc0bee892e68a9f5f90a500
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
