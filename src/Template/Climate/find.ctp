<?php
// API key
$key = '7985b5e264ad6b48283bae4681cc7113';
$city = $_GET['city'];

//function in Helper OpenWeatherMap
if($data = $this->OpenWeatherMap->request($city, $key)){
  echo json_encode(array(
    'temperatura' => ($data->main->temp-273).' ºC',
    'temperatura_max' => ($data->main->temp_min-273).' ºC',
    'temperatura_min' => ($data->main->temp_max-273).' ºC',
    'umidade' => $data->main->humidity.' %',
    'descricao' => $data->weather[0]->description,
    'cidade' => $data->name,
    'nascer_do_sol' => substr(date("Y-m-d H:i:s", $data->sys->sunrise), 11),
    'por_do_sol' => substr(date("Y-m-d H:i:s", $data->sys->sunset), 11),
    'vento' => ($data->wind->speed)*3.6 . 'Km/h',
  ));
}

?>
