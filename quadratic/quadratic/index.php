<?php
include "quadratic.php";
$a = 1;
$b = 2;
$c = 1;
$quadratic = new QuadraticEquation($a, $b, $c);
echo "Delta = " . $quadratic->getDiscriminant() . "<br>";
echo $quadratic->findRoot();