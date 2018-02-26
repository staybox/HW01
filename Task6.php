<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 23:33
 */

$cars = array(

    array ("model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015),
    array ("model" => "Corolla", "speed" => 95, "doors" => 4, "year" => 1987),
    array ("model" => "Astra", "speed" => 290, "doors" => 6, "year" => 1953)
);

foreach ($cars as $car) {

    foreach ($car as $key => $value) {
        echo "$key:$value\n";
    }
}