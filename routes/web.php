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

Route::get('/', function () {
    return view('welcome');
});




/*Route::get('url','Nombre_controlador@nombre_metodo');
Route::get('url',function(){

});

Route::get('ejemplo', function(){
	return "Mi primera ruta";
});

Route::post('enviar', function(){
	return "Metodo post";
});/*No se visualizará nada porque POST epera recibir algo*/

/*Route::get('ejemplo/{parametro}', function($parametro){
	return "El parametro: ".$parametro;
});

Route::get('ejemplo/{nombre}/{edad}', function($nombre,$edad){
	return "Mi nombre es: ".$nombre." y tengo: ".$edad." años";
});

Route::get('master', function(){
	return view('master');
});
 
Route::get('admin/index', function(){
	$datos= array('nombre'=> 'Marian',
		           'edad'=> '22');
	return view('admin.index')->with('parametro',$datos);
});*/

//09/04/2016
//Route::get('persona/index') o también:
Route::get('persona','PersonaController@index')->name('persona.index');

//Route::get('persona/create') o también:
Route::get('persona/nuevo','PersonaController@create')
        ->name('persona.create');

Route::post('persona/guardar','PersonaController@store')->
name('persona.store');
//php artisan serve //el propio ervicio de Laravel

Route::get('persona/editar/{id}','PersonaController@edit');
Route::get('persona/eliminar/destroy/{id}','PersonaController@destroy'); //continuar la próxima, intentar resolver
Route::post('persona/actualizar','PersonaController@update');

//30/04/19
Route::get('prestamo/nuevo','PrestamoController@create');
Route::post('prestamo/guardar','PrestamoController@store')->name('prestamo.crear');

Route::get('prestamo/plan/{id}','PrestamoController@plan_pagos');

//07/05/19
Route::get('amortizaciones','AmortizacionController@index');
Route::post('amortizaciones/buscar','AmortizacionController@buscar')
            ->name('amortizacion.buscar');