<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 21:47
 */

// VARIABLES
$all_pictures = 80;
$felt_tip_pictures = 23;
$pencil_pictures = 40;

// OUTPUT ON SCREEN
echo "Дана задача: На школьной выставке $all_pictures рисунков. $felt_tip_pictures из них выполнены фломастерами, $pencil_pictures карандашами, а остальные — красками.\nСколько рисунков, выполненные красками, на школьной выставке?\n";

// Для того чтобы найти число картинок, выполненных красками, необходимо сложить 23+40=63, далее от 80 отнимем 63 и получим число 17. 17 картинок выполнены красками.

$sum = $felt_tip_pictures + $pencil_pictures;
$paints_pictures = $all_pictures - $sum;

echo "Ответ: $paints_pictures";