<?php

$wishes = [
    'счастья',
    'здоровья',
    'ума',
    'потенциала',
    'процветания',
    'духа',
    'слуха',
    'настроения',
    'успеха',
    'веселья',
];

$epithets = [
    'крепкого',
    'сильного',
    'стойкого',
    'безудержного',
    'нереального',
    'космического',
    'великолепного',
    'добротного',
    'изумительного',
    'роскошного',
    'отличного',
];

echo PHP_EOL;

$name = readline("Имя именинника? ") ?: "Человек";

$epithetsRandomKeys = array_rand($epithets, 3);
$wishesRandomKeys = array_rand($wishes, 3);

$generatedWishes = range(0, 2);

foreach ($generatedWishes as $i => &$value) {
    $value = $epithets[$epithetsRandomKeys[$i]] . " " . $wishes[$wishesRandomKeys[$i]];
}

print_r($generatedWishes);


echo PHP_EOL . "Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения, желаю {$generatedWishes[0]}, {$generatedWishes[1]} и {$generatedWishes[2]}!" . PHP_EOL;

