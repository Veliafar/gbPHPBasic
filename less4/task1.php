<?php

$intArr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

$isEvenOrOdd = function (int $el): string {
    return $el . ' - ' . ($el % 2 == 0 ? 'четное' : 'нечетное');
};

print_r(array_map($isEvenOrOdd, $intArr));



