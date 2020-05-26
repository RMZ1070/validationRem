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

Route::get('/intro','FormulaireController@index')->name('intro');
Route::get('/','WelcomeController@index')->name('home');

Route::get('/creintro','FormulaireController@create')->name('create');

route::post('/save','FormulaireController@store')->name('save');
route::get('/edit/{id}','FormulaireController@edit')->name('Formulairech');
route::post('/upadte/{id}','FormulaireController@update')->name('update');
route::get('/delete/{id}','FormulaireController@destroy')->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
