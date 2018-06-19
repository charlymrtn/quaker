<?php

namespace App\Http\Controllers\API_Dependencies;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use stdClass;


class AirQualityController extends Controller {


    public function getAirQuality( $lat, $long ) {

       $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_URL => 'http://api.waqi.info/feed/geo:'.$lat.';'.$long.'/?token=1f914c9b1ffbf3b4ac82641d116ee93a0011ea2d'
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        $resp = json_decode($resp);

        $response = new stdClass;

        $response->status = $resp->status;
        $response->aqi = $resp->data->aqi;

        return response()->json($response,201);

    }


}
