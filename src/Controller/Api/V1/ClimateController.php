<?php

namespace App\Controller\Api\V1;

use Cake\ORM\TableRegistry;
use App\Model\Table;

use App\Controller\Component\OpenWeatherMapComponent;

class ClimateController extends AppController
{

  public function view($city)
  {
    $key = '7985b5e264ad6b48283bae4681cc7113';
    $OWM = new OpenWeatherMapComponent($key);
    $data = $OWM->request($city);
    $this->set('data', $data);
    $this->set('_serialize', ['data']);
  }

}
