<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Inertia\Inertia;

class weatherapi extends Controller
{
    public function index()
    {
        $apikey = env('API_KEY');
        $lat = 58.254951;
        $lon = 22.491898;
        if (Cache::has("weather")) {
            $data = Cache::get('weather');
            //echo "??"
        } else {
            $response = Http::get("https://api.openweathermap.org/data/2.5/weather?lat={$lat}&lon={$lon}&appid={$apikey}");
            return $response;
            Cache::put("weather", array("name" => $response["name"], "sys" => $response["sys"], "wind" => $response["wind"], "weather" => $response["weather"], "main" => $response["main"]));
            $data = Cache::get("weather");
            //return $response;

        }

    }
}
