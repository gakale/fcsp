<?php

use App\Http\Controllers\AdminController;
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
    return view('acceuil/layout');
});

Route::get('/admin','AdminController@index')->name('admin.index');

Route::get('/joueurs.index', 'JoueursController@index')->name('joueurs.index');
Route::get('/joueurs.create', 'JoueursController@create')->name('joueurs.create');
Route::post('/joueurs.store', 'JoueursController@store')->name('joueurs.store');
Route::get('/joueurs.show/{id}','JoueursController@show')->name('joueurs.show');
Route::patch('/joueurs.update/{id}/','JoueursController@update')->name('joueurs.update');
Route::post('/joueurs.destroy/{id}/','JoueursController@destroy')->name('joueurs.destroy');


// affichage des equipes pro 

Route::get('/effectif-pro','EquipeProController@index')->name('equipepro.index');
