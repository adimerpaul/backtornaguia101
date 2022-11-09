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

//Route::get('/', function () { return view('welcome'); });

Route::get('/', function () { return redirect()->route('login'); });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');


Route::resource('users', 'UserController');

Route::resource('tornaguias', 'TornaguiaController');
Route::get('/tornaguias_view/{id}', 'TornaguiaController@torna_view')->name('tornaguias_view');
Route::get('/tornaguias_pdf/{id}', 'TornaguiaController@pdf')->name('tornaguias_pdf')->middleware('verified');
Route::get('/tornaguias_pdfblanco/{id}', 'TornaguiaController@pdfblanco')->name('tornaguias_pdfblanco')->middleware('verified');
Route::get('/tornaguias_pdfgen/{id}', 'TornaguiaController@pdfgen')->name('tornaguias_pdfgen')->middleware('verified');
Route::get('myform/ajax/{id}',array('as'=>'myform.ajax','uses'=>'TornaguiaController@myformAjax'));
Route::get('myform2/ajax/{id}',array('as'=>'myform.ajax','uses'=>'TornaguiaController@myformAjax2'));
Route::get('myform3/ajax/{id}',array('as'=>'myform.ajax','uses'=>'TornaguiaController@myformAjax3'));


Route::resource('empresas', 'EmpresaController');

Route::resource('transportes', 'TransporteController');

Route::resource('conductors', 'ConductorController');
Route::get('/todosconductores','ConductorController@todos');

Route::resource('contratistas', 'ContratistaController');