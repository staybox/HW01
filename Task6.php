<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 23:33
 */

$bmw = ["model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015];
$toyota = ["model" => "Corolla", "speed" => 95, "doors" => 4, "year" => 1987];
$opel = ["model" => "Astra", "speed" => 290, "doors" => 6, "year" => 1953];

$cars = [
    "Машина BMW" => $bmw,
    "Машина Toyota" => $toyota,
    "Машина Opel" => $opel
];

foreach ($cars as $car) {
    foreach ($car as $key => $value) {
        echo "$key:$value\n";
    }
}
