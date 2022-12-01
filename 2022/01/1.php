<?php

$elvesData = explode("\n\n", file_get_contents('1.input'));

$maxCals = 0;

foreach ($elvesData as $data) {
    $calories = explode("\n", $data);
    $sum = array_sum($calories);

    if ($sum > $maxCals) $maxCals = $sum;
}

echo $maxCals;