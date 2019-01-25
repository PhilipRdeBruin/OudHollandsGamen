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
 
//  Route::get('/keuze', function () {
//    return view('keuze', ['naam'=>'keuze']);
//  });
 
//  Route::get('/profiel', function () {
//    return view('profiel', ['naam'=>'profiel']);
//  });
     
 Route::get('/vraag', function () {
    return view('includes/vraag');
 });
Route::get('test', function () {
    return view('test');
 });

Route::get('setup_spel/{id}', 'ActievespelController@spel');
 

Route::post('test', 'ActievespelController@actiefspeltoevoegen')->name('test.actiefspeltoevoegen');

Route::get('/vriendtoevoegen', 'User_RelationController@vrienden')->name('vriendkiezen');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('keuze', 'KeuzeController@keuze')->name('keuze');

Route::get('keuzevrienduitnodiging', 'KeuzeController@keuzevrienduitnodiging')->name('keuzevrienduitnodiging');

Route::get('spelkeuze', 'SpelController@spelkeuze')->name('spelkeuze');

Route::get('spel/{id}', 'SpelController@spel')->name('spel');

Route::post('vriendentoevoegen', 'MailController@mailvriendtoevoegen')->name('vriendtoevoegen');

Route::get('vriendbevestigen/{gebruiker_id}/{vriend_id}', 'User_RelationController@vriendToevoegenMail')->name('vriendbevestigen');

Route::group(['middleware' => ['auth']], function() {
   Route::get('profiel', 'ProfielController@profiel')->name('profiel');
   Route::put('/profiel', 'ProfielController@update')->name('profiel.update');
});

Route::post('profiel/{id}', 'SpelController@spel');

Route::post('spel/{id}/{uitgenodigde}', 'SpelController@spelSpelen')->name('spelSpelen');
