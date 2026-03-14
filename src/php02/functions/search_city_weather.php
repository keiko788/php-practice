<?php

function searchCityWeather($city_name)
{
    require('config/cities.php');
    foreach ($cities as $city) {
        if ($city['name'] === $city_name) {
            $apiKey = "d90597054dfdf5c82b0b6fff621ea4f8";
            $url = "https://api.openweathermap.org/data/2.5/weather?q=" . $city["en_name"] . "&appid=$apiKey&units=metric&lang=ja";
            $data = file_get_contents($url);
            $weather = json_decode($data, true);
            $CityWeather = $weather['weather'][0]['description'];
            $icon = $weather['weather'][0]['icon'];
            $CityTemp = $weather['main']['temp'];
            $city['weather'] = $CityWeather;
            $city['temp'] = $CityTemp;
            $city['icon'] = $icon;

            return $city;
        }
    }
}

