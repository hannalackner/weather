<?php

namespace Hannalackner\Weather;
class Day {
    private $date;
    private $weather;

    public function __construct($date, $weather) {
        $this->date = $date;
        $this->weather = $weather;
    }

    public function getDate() {
        return $this->date;
    }

    public function getWeather() {
        return $this->weather;
    }
}