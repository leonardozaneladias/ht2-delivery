<?php

namespace App\Http\Controllers\API;

use App\Models\Establishment;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function location($cep){

        $estabs = Establishment::all();
        $response = $this->checkDistances($cep, $estabs);

        if(count($response) > 0){
            return [
                'error' => 0,
                'data' => $response,
                'msg' => 'true',
            ];
        }else{
            return [
                'error' => 1,
                'data' => $response,
                'msg' => 'Endereço incorreto ou não encontrado!',
            ];
        }
    }

    public function mapsApi($cep, Establishment $estab){

        $client = new Client();
        $key = 'AIzaSyByKWSB_-tLIrPhhOFx6Cft6Ygcx0RzNX8';
        $dest = $cep;
        $origi = "{$estab->longitude},{$estab->latitude}";
        $response = $client->request('GET', "https://maps.googleapis.com/maps/api/distancematrix/json?units=metric&origins={$origi}&destinations={$dest}&key={$key}");
        return json_decode($response->getBody()->getContents());

    }

    private function checkDistances($cep, $estabs)
    {
        $response = [];
        foreach ($estabs as $estab){

            $ret = $this->mapsApi($cep, $estab);
            @$distance = $ret->rows[0]->elements[0]->distance->value;
            @$text = $ret->rows[0]->elements[0]->distance->text;
            @$duration = $ret->rows[0]->elements[0]->duration->value;
            @$time_to_delivery = ($duration / 60) + $estab->time_to_delivery;
            if($distance <= 0){

            }elseif($distance <= $estab->limit){
                $response[] = [
                    'id' => $estab->id,
                    'name' => $estab->name,
                    'distance' => $distance,
                    'text' => $text,
                    'time_to_delivery' => round($time_to_delivery),
                ];
            }
        }

        return $response;
    }
}
