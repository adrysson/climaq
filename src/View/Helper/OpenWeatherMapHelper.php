<?php
//helper for OpenWeatherMap API functions
namespace App\View\Helper;

use Cake\View\Helper;

class OpenWeatherMapHelper extends Helper
{

  //function to search OpenWeatherMap API data
  public function request($city, $key = null){
    $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$key;
    $response = file_get_contents($url);
    return json_decode($response);
  }


}
