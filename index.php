<?php


use Hannalackner\Weather\History;
use Hannalackner\Weather\Day;

require 'vendor/autoload.php';


$history = new History();
$history->addDay(new Day("2024-05-04", "sunny"));
$history->addDay(new Day("2024-05-05", "cloudy"));
$history->addDay(new Day("2024-05-06", "rainy"));
$history->addDay(new Day("2024-05-03", "sunny"));
$history->addDay(new Day("2024-05-02", "cloudy"));
$history->addDay(new Day("2024-05-01", "rainy"));
$history->addDay(new Day("2024-04-30", "sunny"));
$history->addDay(new Day("2024-04-29", "cloudy"));
$history->addDay(new Day("2024-04-28", "rainy"));
$history->addDay(new Day("2024-04-27", "sunny"));
$history->addDay(new Day("2024-04-26", "cloudy"));
//$history->addDay(new Day($_GET['date'], $_GET['weather']));

//$date = "2024-05-03";
$date = $_GET['date']; //mit Benutzereingabe sonst die obere Zeile
$weather = $history->getWeatherDate($date);
echo "Weather on $date was $weather";
?>