<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Inertia\Inertia;

class Weatherapi extends Controller
{
    public function index()
    {
        if (Cache::has("weather")) {
            $data = Cache::get('weather');
        } else {
            $response = Http::get('https://api.openweathermap.org/data/2.5/weather?q=kuressaare&units=metric&appid='.config('services.weather.key'));
            Cache::put("weather", array("name" => $response["name"], "sys" => $response["sys"], "wind" => $response["wind"], "weather" => $response["weather"], "main" => $response["main"]),150);
            $data = Cache::get("weather");
        }
        return Inertia::render("Weather", [
            'data' => $data
        ]);
    }
}
