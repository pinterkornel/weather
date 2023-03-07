<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Routing\Controller as BaseController;

class Weather extends BaseController
{
    const API_URL = 'https://api.openweathermap.org/data/2.5/weather';

    const API_KEY = '1077481787381398496a922389d0eea2';

    public function __construct(public Client $client)
    {
    }

    public static function getWeatherDataByCity (string $city): object|null
    {
        try {
           $client = new Client();
           $response = $client->request('post', self::API_URL.'?appid='.self::API_KEY.'&q='.$city,
                array(
                    'verify' => false,
                    'headers' => array(
                        'apikey' => self::API_KEY,
                    )
                )
           );

           return $response;

        } catch (\Throwable $e) {
            var_dump($e->getMessage());
        }

    }

   // function for get data by lat and long

}
