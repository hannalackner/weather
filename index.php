<?php


use Hannalackner\Weather\History;
use Hannalackner\Weather\Day;

require 'vendor/autoload.php';


$history = new History();
$history->addDay(new Day("2024-05-04", "sunny"));
$history->addDay(new Day("2024-05-05", "cloudy"));
$history->addDay(new Day("2024-05-06", "rainy"));

//$date = "2024-05-03";
$date = $_GET['date'];
$weather = $history->getWeatherDate($date);
echo "Weather on $date was $weather";
?>