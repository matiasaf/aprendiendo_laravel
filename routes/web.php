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

Route::get('/',[

  'uses' => 'PersonaController@obtenerListadoPersonas',
  'as' => 'persona.listado.view'

]);

Route::get('persona/alta', [

  'uses' => 'PersonaController@obtenerVistaAlta',
  'as' => 'persona.alta.view'

]);

Route::post('persona', [

  'uses' => 'PersonaController@store',
  'as' => 'persona.store'

]);

Route::get('persona/modificacion/{id}', [

  'uses' => 'PersonaController@obtenerVistaModificar',
  'as' => 'persona.modificar.view'

]);

Route::put('persona/{id}', [

  'uses' => 'PersonaController@update',
  'as' => 'persona.update'

]);

Route::get('persona/delete/{id}',[

  'uses' => 'PersonaController@destroy',
  'as' => 'persona.eliminar'

]);
