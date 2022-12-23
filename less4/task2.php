<?php

$arr = range(1, 100);
shuffle($arr );
$arr = array_slice($arr, 0, 10);

echo PHP_EOL . "Массив случайных чисел" . PHP_EOL;
print_r($arr);

function findMinMaxAndAverageFromArr(array $intArray): array
{
    $resultArray = [];

    $resultArray['min'] = min($intArray);
    $resultArray['max'] = max($intArray);
    $resultArray['average'] = array_sum($intArray) / count($intArray);

    return $resultArray;
}

echo PHP_EOL . "Результат работы findMinMaxAndAverageFromArr" . PHP_EOL;
print_r(findMinMaxAndAverageFromArr($arr));