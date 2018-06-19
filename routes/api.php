<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('places/{lat}/{lon}/{type}','MapsController@lugaresApi');

Route::group(['prefix' => 'quaker'], function() {
  Route::get('noticias','NoticiasController@indexApi');
  Route::get('noticias/{id}','NoticiasController@showApi');
  Route::post('noticias','NoticiasController@storeApi');
  Route::put('noticias/{id}','NoticiasController@updateApi');
  Route::get('noticias/delete/{id}','NoticiasController@destroyApi');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});
//Route::group(['prefix' => 'quaker', 'middleware' => 'auth:api'], function() {
Route::group(['prefix' => 'quaker'], function() {
  Route::get('vehiculo','VehiculoController@indexApi');
  Route::get('vehiculo/{id}','VehiculoController@showApi');
  Route::post('vehiculo','VehiculoController@store');
  Route::put('vehiculo/{id}','VehiculoController@updateApi');
  Route::get('infracciones/{id}','VehiculoController@infraccionesApi');
  Route::get('servicios/{id}','VehiculoController@serviciosApi');
  Route::get('usuario/{id}','VehiculoController@usuarioApi');

  Route::resource('servicioMantenimiento', 'ServicioMantenimientoController');
  Route::resource('foto', 'FotoController');
  Route::resource('calidadAire', 'CalidadAireController');

  Route::get('/getFines/{plates}', 'API_Dependencies\DataVehiclesController@getFines');
  Route::get('/getHoldingInformation/{plates}', 'API_Dependencies\DataVehiclesController@getHoldingInformation');
  Route::get('/getAirQuality/{lat}/{long}', 'API_Dependencies\AirQualityController@getAirQuality');


  Route::resource('verificacion', 'VerificacionController');
  Route::resource('poliza', 'PolizaSeguroController');
});

Route::post('register', ['as' => 'register', 'uses' =>'Auth\RegisterController@register']);
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@loginApi']);
