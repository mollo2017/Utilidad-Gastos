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

Route::get('/','MainController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/print','PrintController@index');//listado1
Route::get('/admin/print/indexNf','PrintController@indexnf');//listado2
Route::post('/admin/print/indexNf','PrintController@show');//formulario de busqueda
Route::get('/admin/print/{id}/vsearch1','PrintController@vsearch1');//listadoencontrados

Route::get('/admin/billed_expense','BilledExpenceController@index');//listado
Route::get('/admin/billed_expense/create','BilledExpenceController@create');//formulario
Route::post('/admin/billed_expense','BilledExpenceController@store');//Creacion de nuevo registro
Route::get('/admin/billed_expense/{id}/edit','BilledExpenceController@edit');//formulario de edicion
Route::post('/admin/billed_expense/{id}/edit','BilledExpenceController@update');//actualizacion de registro


Route::get('/admin/not_billed_expense','NotBilledExpenceController@index');//listado
Route::get('/admin/not_billed_expense/create','NotBilledExpenceController@create');//formulario
Route::post('/admin/not_billed_expense','NotBilledExpenceController@store');//formulario

Route::get('/admin/poblation','PoblationController@index');//listado
Route::get('/admin/poblation/create','PoblationController@create');//formulario
Route::post('/admin/poblation','PoblationController@store');//formulario
Route::get('/admin/poblation/{id}/edit','PoblationController@edit');//formulario
Route::post('/admin/poblation/{id}/edit','PoblationController@update');//formulario
Route::delete('/admin/poblation/{id}','PoblationController@destroy');//formulario

Route::get('/admin/route','RouteController@index');//listado
Route::get('/admin/route/create','RouteController@create');//formulario
Route::post('/admin/route','RouteController@store');//formulario
Route::get('/admin/route/{id}/edit','RouteController@edit');//formulario
Route::post('/admin/route/{id}/edit','RouteController@update');//formulario
Route::delete('/admin/route/{id}','RouteController@destroy');//formulario

Route::get('/admin/person','PersonController@index');//listado
Route::get('/admin/person/create','PersonController@create');//formulario
Route::post('/admin/person','PersonController@store');//formulario
Route::get('/admin/person/{id}/edit','PersonController@edit');//formulario
Route::post('/admin/person/{id}/edit','PersonController@update');//formulario
Route::delete('/admin/person/{id}','PersonController@destroy');//formulario

Route::get('/admin/truck','TruckController@index');//listado
Route::get('/admin/truck/create','TruckController@create');//formulario
Route::post('/admin/truck','TruckController@store');//formulario
Route::get('/admin/truck/{id}/edit','TruckController@edit');//formulario
Route::post('/admin/truck/{id}/edit','TruckController@update');//formulario
Route::delete('/admin/truck/{id}','TruckController@destroy');//formulario

Route::get('/admin/trip_facts','TripFactController@index');//listado
Route::get('/admin/trip_facts/create','TripFactController@create');//formulario
Route::post('/admin/trip_facts','TripFactController@store');//formulario

Route::get('/admin/trip_result','TripResultController@index');//listado
Route::get('/admin/trip_result/create','TripResultController@create');//formulario
Route::post('/admin/trip_result','TripResultController@store');//formulario
Route::get('/admin/trip_result/{id}/print','TripResultController@print');//formulario
//Route::post('/admin/trip_result/{id}/search','PoblationController@generate');//formulario