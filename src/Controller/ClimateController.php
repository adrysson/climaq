<?php

namespace App\Controller;

use App\Controller\AppController;

class ClimateController extends AppController
{
  public function index()
  {

  }
  public function view()
  {
    $key = '7985b5e264ad6b48283bae4681cc7113';
    $city = $_POST['city'];
    $this->set('key', $key);
    $this->set('city', $city);

  }
}
