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

Route::get('persona/alta', [

  'uses' => 'PersonaController@getAltaView',
  'as' => 'persona.alta.view'

]);

Route::post('persona', [

  'uses' => 'PersonaController@store',
  'as' => 'persona.store'

]);

Route::get('persona/listado', function () {
    return view('listado');
});

Route::get('persona/modificacion', function () {
    return view('modificar');
});
