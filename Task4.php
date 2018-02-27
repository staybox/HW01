<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 22:30
 */

// VARIABLES
$age = 30;

if($age >= 18 && $age <= 65) {

    echo "Вам еще работать и работать";
}
elseif ($age > 65) {

    echo "Вам пора на пенсию";
}
elseif ($age >= 1 && $age <= 17) {

    echo "Вам ещё рано работать";
}
elseif ($age < 1) {

    echo "Неизвестный возраст";
}
