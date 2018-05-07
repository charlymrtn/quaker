<?php

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['middleware' => ['auth:api']], function() {
	
	//Route::get('/getAirQuality/{lat}/{long}', 'TestController@getAirQuality');

});

Route::get('/getAirQuality/{lat}/{long}', 'API_Dependencies\AirQualityController@getAirQuality');
