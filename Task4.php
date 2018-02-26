<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 22:30
 */

// VARIABLES
$Age = 30;

if($Age >= 18 && $Age <= 65) {

    echo "Вам еще работать и работать";
}
elseif ($Age > 65) {

    echo "Вам пора на пенсию";
}
elseif ($Age >= 1 && $Age <= 17) {

    echo "Вам ещё рано работать";
}
elseif ($Age < 1) {

    echo "Неизвестный возраст";
}
