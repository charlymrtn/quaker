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
    return redirect('login');
});

//Auth::routes();


Auth::routes();
Route::get('home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['user']], function () {
  Route::resource('news', 'NoticiasController', ['except' => ['destroy']]);
  Route::get('delete/{id}', [
      'as' => 'delete', 'uses' => 'NoticiasController@destroy'
  ]);
  Route::resource('vehiculos', 'VehiculoController', ['except' => ['destroy']]);

  Route::get('infracciones/{id}', 'VehiculoController@infracciones');
  Route::get('servicios/{id}', 'VehiculoController@servicios');
  Route::get('usuario/{id}', 'VehiculoController@usuario');
});

//Route::post('register1', 'Auth\RegisterController@register');
