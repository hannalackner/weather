<?php

namespace Hannalackner\Weather;
class History {
    private $days = [];

    public function addDay(Day $day) {
        $this->days[] = $day;
    }

    public function getWeatherDate($date) {
        foreach ($this->days as $day) {
            if ($day->getDate() == $date) {
                return $day->getWeather();
            }
        }
        return "";
    }
}