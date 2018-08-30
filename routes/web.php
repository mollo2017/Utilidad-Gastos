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

/* 
toda ruta **sin uso, se declara para la posterior modificacion ya que en esta version del software no es 
necesario su uso y/o emplementacion, asi que son declaradas para referencias posteriores en caso de que el 
proyecto tenga continuacion.
toda ruta**sin implementar, se declaró como referencia de posibles implementaciones en el futuro, obviamente 
en una posterior version del sotfware y en posible continuacion del proyecto.
En resumen lo que no se ha implementado es por que por el momento no es requerido para formar parte del sistema 
y por lo tanto solo funge como referenciacion para futuros puntos de partida en caso de continuación o actualización.
*/

/* rutas en funcion de prueba para busquedas(sin implementar)
Route::get('/admin/print','PrintController@index');//listado1
Route::get('/admin/print/indexNf','PrintController@indexnf');//listado2
Route::post('/admin/print/indexNf','PrintController@show');//formulario de busqueda
Route::get('/admin/print/{id}/vsearch1','PrintController@vsearch1');//listadoencontrados
*/
//Se ha aplicado un middleware de autenticación por grupo de rutas para garantizar el acceso de usuarios registrados.
//Route::middleware(['auth'])->group(function(){...});
Route::middleware(['auth'])->group(function(){
	Route::get('/admin/billed_expense','BilledExpenceController@index');//ruta listado
	Route::get('/admin/billed_expense/create','BilledExpenceController@create');//ruta formulario para nuevo
	Route::post('/admin/billed_expense','BilledExpenceController@store');//ruta funcion de guardar nuevo
	Route::get('/admin/billed_expense/{id}/edit','BilledExpenceController@edit');//ruta formulario de edicion
	Route::post('/admin/billed_expense/{id}/edit','BilledExpenceController@update');//ruta para actualizar registro
}); 

Route::middleware(['auth'])->group(function(){
	Route::get('/admin/not_billed_expense','NotBilledExpenceController@index');//ruta listado
	Route::get('/admin/not_billed_expense/create','NotBilledExpenceController@create');//ruta formulario para nuevo(sin uso)
	Route::post('/admin/not_billed_expense','NotBilledExpenceController@store');//ruta funcion de guardar nuevo(sin uso)
});

Route::middleware(['auth'])->group(function(){
	Route::get('/admin/poblation','PoblationController@index');//ruta listado
	Route::get('/admin/poblation/create','PoblationController@create');//ruta formulario para nuevo
	Route::post('/admin/poblation','PoblationController@store');//ruta funcion de guardar nuevo
	Route::get('/admin/poblation/{id}/edit','PoblationController@edit');//ruta formulario de edición
	Route::post('/admin/poblation/{id}/edit','PoblationController@update');//ruta para actualizar registro
	Route::delete('/admin/poblation/{id}','PoblationController@destroy');//ruta formulario para eliminar registro
});

Route::middleware(['auth'])->group(function(){
	Route::get('/admin/route','RouteController@index');//ruta listado
	Route::get('/admin/route/create','RouteController@create');//ruta formulario para nuevo
	Route::post('/admin/route','RouteController@store');//ruta funcion de guardar nuevo
	Route::get('/admin/route/{id}/edit','RouteController@edit');//ruta formulario de edición
	Route::post('/admin/route/{id}/edit','RouteController@update');//ruta para actualizar registro
	Route::delete('/admin/route/{id}','RouteController@destroy');//ruta formulario para eliminar registro
});

Route::middleware(['auth'])->group(function(){
	Route::get('/admin/person','PersonController@index');//ruta listado
	Route::get('/admin/person/create','PersonController@create');//ruta formulario para nuevo
	Route::post('/admin/person','PersonController@store');//ruta funcion de guardar nuevo
	Route::get('/admin/person/{id}/edit','PersonController@edit');//ruta formulario de edición
	Route::post('/admin/person/{id}/edit','PersonController@update');//ruta para actualizar registro
	Route::delete('/admin/person/{id}','PersonController@destroy');//ruta formulario para eliminar registro
});

Route::middleware(['auth'])->group(function(){
Route::get('/admin/truck','TruckController@index');//ruta listado
Route::get('/admin/truck/create','TruckController@create');//ruta formulario para nuevo
Route::post('/admin/truck','TruckController@store');//ruta funcion de guardar nuevo
Route::get('/admin/truck/{id}/edit','TruckController@edit');//ruta formulario de edición
Route::post('/admin/truck/{id}/edit','TruckController@update');//ruta para actualizar registro
Route::delete('/admin/truck/{id}','TruckController@destroy');//ruta formulario para eliminar registro
});

Route::middleware(['auth'])->group(function(){
Route::get('/admin/trip_facts','TripFactController@index');//ruta listado
Route::get('/admin/trip_facts/create','TripFactController@create');//ruta formulario para nuevo(sin uso)
Route::post('/admin/trip_facts','TripFactController@store');//ruta para guardar nuevo(sin uso)
});

Route::middleware(['auth'])->group(function(){
Route::get('/admin/trip_result','TripResultController@index');//ruta listado
Route::get('/admin/trip_result/create','TripResultController@create');//ruta formulario para nuevo(sin uso)
Route::post('/admin/trip_result','TripResultController@store');//ruta para guardar nuevo(sin uso)
Route::get('/admin/trip_result/{id}/print','TripResultController@print');//ruta formulario de impresion
//Route::post('/admin/trip_result/{id}/search','PoblationController@generate');//ruta para busqueda(sin implementar)
});