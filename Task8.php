<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 27.02.2018
 * Time: 0:18
 */

$str = "Строка с пробелами";
echo $str . "\n";
$array = explode(" ", $str);
echo $array[1] . $array[2] . "|" . $array[0];








/*
$implode = implode("|", $array);


foreach ($array as $item) {
    echo $item;
}
*/
