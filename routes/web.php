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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'HomeController@index')->name('home');

Route::post('etudiants/add', 'EtudiantController@add')->name('addEtudiant');

Route::get('etudiants/show/{id}', 'EtudiantController@show')->name('showEtudiant')->where('id','[0-9]+');


Route::get('etudiants/edit/{id}', 'EtudiantController@edit')->name('editEtudiant')->where('id','[0-9]+');

Route::put('etudiants/update/{id}', 'EtudiantController@update')->name('updateEtudiant')->where('id','[0-9]+');
Route::get('etudiants/destroy/{id}', 'EtudiantController@destroy')->name('destroyEtudiant')->where('id','[0-9]+');
Auth::routes();
