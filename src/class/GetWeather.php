<?php
  class GetWeather{
    public $baseUrl;
    public $key;

    public function __construct(){
    $this->baseUrl = 'http://api.openweathermap.org/data/2.5/weather';
    $this->key= 'b7ba0b30cc4aee57ba67dd21c5f04eb9';
    }
    public function getData($city){
      $parameters = http_build_query([
        'q'=> $city,
        'appid'=> $this->key
      ]);
      $url="{$this->baseUrl}?{$parameters}";
      $json = file_get_contents($url);

      return json_decode($json);
    }
  }
?>
