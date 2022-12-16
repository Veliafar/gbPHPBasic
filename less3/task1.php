<?php

$arr1 = [];
$arr2 = [];
$multiplyArrResult = [];

for ($i = 0; $i < 10; $i++) {
    $arr1[] = random_int(1, 100);
    $arr2[] = random_int(1, 100);

    $multiplyArrResult[] = $arr1[$i] * $arr2[$i];
}

print_r($multiplyArrResult);




