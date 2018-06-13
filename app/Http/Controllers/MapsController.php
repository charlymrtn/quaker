<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mapper;
use App\UltimoPinUbicacion as Ubicacion;
use GuzzleHttp\Client;
use stdClass;
use Route;

class MapsController extends Controller
{
  const URL = 'https://maps.googleapis.com/maps/api/place/';
  const APIKEY = 'AIzaSyBJ1qOTxecheQysUBEmotbdCryIosNIa_Y';
  const TYPE = 'gas_station';
  const RADIUS = 3000;

  const LAT = '19.328704';
  const LON = '-99.164989';

    public function __construct(){
      $this->client = new Client([
        'base_uri' => self::URL
      ]);
    }

    public function lugares($lat, $lon,$type)
    {
      // code...
      $places = $this->places($lat, $lon,$type);

      $map = Mapper::map($lat,$lon,
      ['zoom' => 15,'markers' =>['animation'=> 'DROP']]);

      foreach ($places as $place) {
        // code...
        Mapper::informationWindow($place->location->lat,$place->location->lng,$place->name,['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => $place->address]]);
      }

      return view('quaker.markers',compact('map'));
    }

    public function lugaresApi($lat, $lon,$type)
    {
      // code...
      $places = $this->places($lat, $lon,$type);

      return response()->json(['places' => $places],201);
    }

    public function places($lat, $lon,$type)
    {
      // code...
      $response = $this->client->request('GET','nearbysearch/json',['query' =>
                                                ['location'=>$lat.','.$lon,
                                                 'radius' => self::RADIUS,
                                                 'type' => $type,
                                                 'key' => self::APIKEY]]);

      $respuesta = json_decode($response->getBody());

      $places = array();

      foreach ($respuesta->results as $lugar) {
        // code...
        $place = new stdClass;
        $place->id = $lugar->place_id;
        $place->location = $lugar->geometry->location;
        $place->name =  $lugar->name;
        $place->address = $lugar->vicinity;

        array_push($places,$place);
      }

      return $places;
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

      $map = Mapper::map($location->latitude,$location->longitude,
      ['zoom' => 14,'markers' =>['animation'=> 'DROP']]);

      foreach ($locations as $location) {
        // code...
        Mapper::informationWindow($location[0],$location[1],$location[2],['open' => true, 'maxWidth'=> 300, 'markers' => ['title' => $location[2]]]);
      }

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
