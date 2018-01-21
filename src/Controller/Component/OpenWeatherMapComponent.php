<?php
//helper for OpenWeatherMap API functions
namespace App\Controller\Component;

use Cake\Controller\Component;

class OpenWeatherMapComponent extends Component
{
  private $key;

  function __construct($key)
  {
    $this->key = $key;
  }
  //function to search OpenWeatherMap API data
  public function request($city){
    $url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$this->key;
    $response = json_decode(file_get_contents($url));
    if($response == null){
      return false;
    }
    $values = array(
      'Cidade' => $response->name,
      'Temperatura' => ($response->main->temp-273).' ºC',
      'Temperatura Máxima' => ($response->main->temp_min-273).' ºC',
      'Temperatura Mínima' => ($response->main->temp_max-273).' ºC',
      'Umidade' => $response->main->humidity.' %',
      'Descrição' => $response->weather[0]->description,
      'Nascer do Sol' => substr(date("Y-m-d H:i:s", $response->sys->sunrise), 11),
      'Pôr do Sol' => substr(date("Y-m-d H:i:s", $response->sys->sunset), 11),
      'Vento' => ($response->wind->speed)*3.6 . ' Km/h'
    );
    return $values;
  }


}
