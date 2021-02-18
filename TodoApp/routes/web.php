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
    return view('accueil');
});

Route::get('apropos','AproposController@getPropospage');
Route::get('contact','ContactController@getContactpage');
Route::post('contact','ContactController@postcontact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('/taches','GestionController');
Route::get('accomplie','GestionController@accomplie')->name('accomplie');

Route::put('taches/faireaccomplie/{taches}','GestionController@faireaccomplie')->name('taches.faireaccomplie');
Route::put('taches/fairenonaccomplie/{taches}','GestionController@fairenonaccomplie')->name('taches.fairenonaccomplie');
