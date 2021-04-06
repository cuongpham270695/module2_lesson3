<?php
include "rectangle.php";
$width = 10;
$height = 20;
$rectangle = new Rectangle($width,$height);
echo $rectangle->height."\n";
echo $rectangle->width."\n";
$rectangle->height=30;
$rectangle->width=20;
echo $rectangle->height."\n";
echo $rectangle->width."\n";
echo $rectangle->getPerimeter()."\n";
echo $rectangle->getArea()."\n";
echo ("Your Rectangle" . $rectangle->display());