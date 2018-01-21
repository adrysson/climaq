<?php
//helper for OpenWeatherMap API functions
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\I18n\Time;
use Cake\Core\Configure;

class OpenWeatherMapComponent extends Component
{
  
  //function to search OpenWeatherMap API data
  public function request($city, $key = null){
    $this->_controller = $controller;
    $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$key;
    $response = json_decode(file_get_contents($url));
    if($response == null){
      return false;
    }
    $values = array(
      [
        'name' => 'Cidade',
        'value'=> $response->name
      ],
      [
        'name' => 'Temperatura',
        'value'=> ($response->main->temp-273).' ºC'
      ],
      [
        'name' => 'Temperatura Máxima',
        'value'=> ($response->main->temp_min-273).' ºC'
      ],
      [
        'name' => 'Temperatura Mínima',
        'value'=> ($response->main->temp_max-273).' ºC'
      ],
      [
        'name' => 'Umidade',
        'value'=> $response->main->humidity.' %'
      ],
      [
        'name' => 'Descrição',
        'value'=> $response->weather[0]->description
      ],
      [
        'name' => 'Nascer do Sol',
        'value'=> substr(date("Y-m-d H:i:s", $response->sys->sunrise), 11)
      ],
      [
        'name' => 'Pôr do Sol',
        'value'=> substr(date("Y-m-d H:i:s", $response->sys->sunset), 11)
      ],
      [
        'name' => 'Vento',
        'value'=> ($response->wind->speed)*3.6 . ' Km/h'
      ]
    );
    return $values;
  }


}
