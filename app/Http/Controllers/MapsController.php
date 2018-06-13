<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\UltimoPinUbicacion as Ubicacion;
use GuzzleHttp\Client;
use stdClass;

class MapsController extends Controller
{
  const URL = 'https://maps.googleapis.com/maps/api/place/';
  const APIKEY = 'AIzaSyBJ1qOTxecheQysUBEmotbdCryIosNIa_Y';
  const TYPE = 'gas_station';
  const RADIUS = 5000;

    public function __construct(){
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function index()
    {
      // code...
      $location = new stdClass;
      $location->latitude = '19.40938';
      $location->longitude = '-99.09961';

      $locations = [
          ['19.425','-99.113246','Cecilio'],
          ['19.417585','-99.105821','Walmart'],
          ['19.415197','-99.11685','Home Depot'],
          ['19.410381','-99.108868','Fray Nano'],
      ];

      $response = $this->client->request('GET','radarsearch/json',['query' =>
                                                ['location'=>$location->latitude.','.$location->longitude,
                                                 'radius' => self::RADIUS,
                                                 'type' => self::TYPE,
                                                 'key' => self::APIKEY]
                                              ]);
      //$torneos = json_decode($response->getBody());

      //return $response;

      $map = Mapper::map($location->latitude,$location->longitude,
      ['zoom' => 14,'markers' =>['animation'=> 'DROP']]);

      foreach ($locations as $location) {
        // code...
        Mapper::informationWindow($location[0],$location[1],$location[2],['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => $location[2]]]);
      }

      // Mapper::informationWindow($locations[1][0], $locations[1][1], $locations[1][2],['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => 'Title']]);
      //$map = Mapper::map(52.381128999999990000, 0.470085000000040000);

      //Mapper::circle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000]], ['editable' => 'true']);
      //Mapper::rectangle([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['editable' => 'true']);
      //Mapper::polygon([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['editable' => 'true']);
      //Mapper::polyline([['latitude' => 53.381128999999990000, 'longitude' => -1.470085000000040000], ['latitude' => 52.381128999999990000, 'longitude' => 0.470085000000040000]], ['editable' => 'true']);

      return view('quaker.markers',compact('map'));
    }
    //
    public function map($id,$vehiculo)
    {
    	# code...
    	$ubicacion = Ubicacion::where('usuario_id_usuario',$id)->first();

    	if ($ubicacion) {
    		# code...
    		$map = Mapper::map($ubicacion->latitud, $ubicacion->longitud);
    		return view('quaker.map',compact('map','id','vehiculo'));
    	}else{
    		return response()->json('no hay ubicaciones de ese usuario',500);
    	}

    }
}
