<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 27.02.2018
 * Time: 0:18
 */

$str = "Три ключевых принципа ПО, которые вы должны понимать";
echo $str . "\n";
$array = explode(" ", $str);
print_r($array);

$count = count($array)-1;

while ($count >= 0) {

    echo $array[$count];
    $count--;
    echo implode(",", ["|"]);
}



