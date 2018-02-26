<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 22:07
 */

// CONST
define("NUMBER", "5465722454554412");

// OUTPUT ON SCREEN
if (defined('NUMBER')) {
    echo NUMBER;
}

echo "\nПри повторном присваивании значения константы выскакивает ошибка, т.к. константа неизменяемое значение.";