<?php

echo 'Вариант 1' . '  --------------------' . PHP_EOL;

$arr1 = [];
$arr2 = [];
$multiplyArrResult = [];

for ($i = 0; $i < 10; $i++) {
    $arr1[] = random_int(1, 100);
    $arr2[] = random_int(1, 100);

    $multiplyArrResult[] = $arr1[$i] * $arr2[$i];
}

print_r($multiplyArrResult);
echo PHP_EOL;


echo 'Вариант 2' . '  --------------------' . PHP_EOL;

$type2Arr1 = range(0, 100);
$type2Arr2 = range(0, 100);

shuffle($type2Arr1 );
shuffle($type2Arr2 );

$type2Arr1 = array_slice($type2Arr1, 0, 10);
$type2Arr2 = array_slice($type2Arr2, 0, 10);

$type2MultiplyArrResult = range(0, 9);

foreach ($type2MultiplyArrResult as $key => $value) {
    $type2MultiplyArrResult[$key] = $type2Arr1[$key] * $type2Arr2[$key];
}

print_r($type2MultiplyArrResult);
echo PHP_EOL;






