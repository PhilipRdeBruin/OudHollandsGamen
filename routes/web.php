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
 
 Route::get('/profiel', function () {
   return view('profiel');
 });
     
 Route::get('/vraag', function () {
    return view('includes/vraag');
 });
 Route::get('/vriendtoevoegen', function () {
    return view('vriendtoevoegen');
 });


Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('keuzevrienduitnodiging', 'KeuzeController@keuzevrienduitnodiging')->name('keuzevrienduitnodiging');
     
Route::get('profiel', 'KeuzeController@profiel')->name('profiel');

Route::get('spelkeuze', 'SpelController@spelkeuze')->name('spelkeuze');

Route::get('spel/{id}', 'SpelController@spel')->name('spel');

Route::post('vriendentoevoegen', 'User_RelationController@profiel') ->name('vriendentoevoegen');
