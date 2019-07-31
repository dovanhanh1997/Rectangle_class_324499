<?php
include_once 'Rectangle.php';

$width = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo $rectangle->height . '<br>';
echo $rectangle->width . '<br>';

$rectangle->width = 30;
$rectangle->height = 40;

echo $rectangle->height . '<br>';
echo $rectangle->width . '<br>';
echo $rectangle->get_Area() . '<br>';
echo $rectangle->get_Perimeter();

