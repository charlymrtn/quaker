<?php

namespace App\Http\Controllers\API_Dependencies;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class DataVehiclesController extends Controller {

    /**
     *
     * @param
     * @return
     */
    public function getFines($plates) {
        $json = 
        '{
            "infracciones": [
                {
                    "folio": "03038482657",
                    "fecha": "2013-09-06",
                    "situacion": "Pagada ",
                    "motivo": "POR NO RESPETAR LOS LÍMITES DE VELOCIDAD ESTABLECIDOS EN VÍAS PRIMARIAS, EN CASO DE NO HABER SEÑALAMIENTO   LA VELOCIDAD MÁXIMA SERÁ DE 70 KILÓMETROS POR HORA",
                    "fundamento": "Artículo: 5, Fracción: V, Parrafo: , Inciso: A",
                    "sancion": "5 unidades de cuenta ",
                    "monto_infraccion": 358.4,
                    "pagada": true
                },
                {
                    "folio": "04144419377",
                    "fecha": "2014-07-11",
                    "situacion": "Pagada ",
                    "motivo": "POR NO AJUSTARSE EL CINTURÓN DE SEGURIDAD Y ASEGURARSE QUE LOS DEMÁS PASAJEROS TAMBIÉN SE LO AJUSTEN, CUANDO SE TRATE DE MENORES DE 12 AÑOS O PERSONAS CON DISCAPACIDAD, DEBERÁN SER TRANSPORTADOS UTILIZANDO LOS SISTEMAS DE RETENCIÓN PERTINENTES.",
                    "fundamento": "Artículo: 5, Fracción: VI, Parrafo: , Inciso: ",
                    "sancion": "5 unidades de cuenta ",
                    "monto_infraccion": 358.4,
                    "pagada": true
                }
            ]
        }';
            
        return $json;
        
        /*$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_URL => ' http://www.finanzas.df.gob.mx/sma/detallePlaca.php?placa='.$plates
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        $resp = json_decode($resp);*/
        /*header('Content-Type: application/json');
        return response() -> json([
            //'status' => $resp->status,
            'data' => [
                'infracciones' => $resp->data->infracciones ]
            ], 201);*/
    }

    /**
     *
     * @param
     * @return
     */
    public function getHoldingInformation() {
        $json = 
        '{
            "adeudos_tenencias": [
                {
                    "ejercicio": "2014",
                    "tenencia": 0,
                    "subsidio": 0,
                    "actualizacion": 0,
                    "recargo": 0,
                    "condonacion_recargo": 0,
                    "total_tenencia": 0,
                    "derecho": 217,
                    "actualiza_derecho": 12.6,
                    "recargo_derecho": 25.39,
                    "total_derechos": 254.99,
                    "total_impuesto": 0,
                    "total_derecho": 217,
                    "total_actualiza": 12.6,
                    "total_recargo": 25.39,
                    "total": 255
                },
                {
                    "ejercicio": "2013",
                    "tenencia": 0,
                    "subsidio": 0,
                    "actualizacion": 0,
                    "recargo": 0,
                    "condonacion_recargo": 0,
                    "total_tenencia": 0,
                    "derecho": 205.5,
                    "actualiza_derecho": 20.11,
                    "recargo_derecho": 24.95,
                    "total_derechos": 250.56,
                    "total_impuesto": 0,
                    "total_derecho": 205.5,
                    "total_actualiza": 20.11,
                    "total_recargo": 24.95,
                    "total": 251
                },
                {
                    "ejercicio": "2015",
                    "tenencia": 0,
                    "subsidio": 0,
                    "actualizacion": 0,
                    "recargo": 0,
                    "condonacion_recargo": 0,
                    "total_tenencia": 0,
                    "derecho": 227.5,
                    "actualiza_derecho": 5.91,
                    "recargo_derecho": 25.81,
                    "total_derechos": 259.22,
                    "total_impuesto": 0,
                    "total_derecho": 227.5,
                    "total_actualiza": 5.91,
                    "total_recargo": 25.81,
                    "total": 259
                }
            ]
        }';

        return $json;

         /*$curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 10,
            CURLOPT_URL => ' http://www.finanzas.df.gob.mx/sma/detallePlaca.php?placa='.$plates
        ));
        $resp = curl_exec($curl);
        curl_close($curl);
        $resp = json_decode($resp);*/
        /*header('Content-Type: application/json');
        return response() -> json([
            //'status' => $resp->status,
            'data' => [
                'adeudos_tenencias' => $resp->data->adeudos_tenencias ]
            ], 201);*/
    }

}
