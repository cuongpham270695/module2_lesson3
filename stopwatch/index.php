<?php
include "stopwatch.php";
$time = new stopWatch();
$array = [];
for ($i = 0; $i < 10000; $i++) {
    $array[] = rand(1, 10);
}

$time->start();

for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$j] < $array[$i]) {
            $min = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $min;
        }
    }
}
$time->stop();
echo "Số milli giây đã trôi qua là: " .$time->getElapsedTime();