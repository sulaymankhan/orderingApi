<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;
use Carbon\Carbon;
class GoogleDirections extends Model
{
	/**
     * Calculates the duration between point A and B and returns the Estimated time of delivery from the date of Order Creation.
     *
     * @param  string  $address1
     * @param  string  $address2
     * @return Carbon DateTime|false
     */

    public static function getEstimatedTimeOfArrival(String $address1,String $address2){

    	$eta = false;
    	$endpoint = "https://maps.googleapis.com/maps/api/directions/json";
  
    	$query = [
    		'origin'=>$address1,
    		'destination'=>$address2,
    		'key'=>env('GOOGLE_DIRECTIONS_API_KEY')
    	];

        $client = new Client();
        $res = $client->request('GET',$endpoint,['query'=>$query]);
     
        $response=$res->getBody(); 
        $response = json_decode($response);

      	if(  isset($response->status) && $response->status == 'OK' ){
      		$durationInSeconds = isset($response->routes[0]->legs[0]->duration->value) ? $response->routes[0]->legs[0]->duration->value : false;
      		if($durationInSeconds){
      			$eta = Carbon::now()->addSeconds($durationInSeconds);
      		}
      	}
       

        return $eta;

    }

    
    
}
