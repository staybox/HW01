<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 22:52
 */

// VARIABLES

//$day = rand(1,7);
$day = 3;
switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
    case 6:
        echo "Это выходной день";
        break;
    case 7:
        echo "Это выходной день";
    default:
        echo "Неизвестный день";
}
