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

/*Route::get('/', function () { return view('welcome');});

//CRUD DE MOTOS

Route::get('bikes',"BikeController@list"); //listado de motos
Route::get('bikes/{id}',"BikeController@show"); //mostrar una moto

//añadir una moto
Route::get('bikes/create',"BikeController@create"); //si no llega el formulario
Route::post('bikes/create',"BikeController@store"); //si llega el formulario

//actualizar una moto
Route::get('bikes/update/{id}',"BikeController@edit");
Route::post('bikes/update/{id}',"BikeController@update");

//borrar  una moto
Route::get('bikes/delete/{id}',"BikeController@delete");
Route::post('bikes/delete/{id}',"BikeController@destroy");*/

// se puede resumir todas esas referencias en lo siguiente:

// PORTADA
Route::get('/', function () { return view('welcome');});

//operaciones con las motos
Route::resource('bikes',"BikeController"); 
//operación para que haga la confirmación de borrado 
Route::get('bikes/delete/{id}',"BikeController@delete")->name('bikes.delete');


