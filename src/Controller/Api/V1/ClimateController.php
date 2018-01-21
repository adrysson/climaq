<?php

namespace App\Controller\Api\V1;

use Cake\ORM\TableRegistry;
use App\Model\Table;

use App\Controller\Component\OpenWeatherMapComponent;

class ClimateController extends AppController
{
  public function index()
  {
    $climate = 'nanana';
    $this->set('climate', $climate);
    $this->set('_serialize', ['climate']);
  }
  public function view($city)
  {

    $a = new OpenWeatherMapComponent;
    $dados = $a->request($city, '7985b5e264ad6b48283bae4681cc7113');
    $this->set('data', $dados);
    $this->set('_serialize', ['data']);

  }


  public function request($city, $key = null){
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
