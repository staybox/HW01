<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 26.02.2018
 * Time: 21:47
 */

// VARIABLES
$allPictures = 80;
$feltTipPictures = 23;
$pencilPictures = 40;

// OUTPUT ON SCREEN
echo "Дана задача: На школьной выставке $allPictures рисунков. $feltTipPictures из них выполнены фломастерами, $pencilPictures карандашами, а остальные — красками.\nСколько рисунков, выполненные красками, на школьной выставке?\n";

// Для того чтобы найти число картинок, выполненных красками, необходимо сложить 23+40=63, далее от 80 отнимем 63 и получим число 17. 17 картинок выполнены красками.

$sum = $felTipPictures + $pencilPictures;
$paintsPictures = $allPictures - $sum;

echo "Ответ: $paintsPictures";