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
    'саморазвития',
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
    'бриллиантого'
];

echo PHP_EOL;

$name = readline("Имя именинника? ") ?: "Человек";

$numberOfWishes = 3;

$epithetsRandomKeys = array_rand($epithets, $numberOfWishes);
$wishesRandomKeys = array_rand($wishes, $numberOfWishes);

$generatedWishes = range(0, $numberOfWishes - 1);

foreach ($generatedWishes as $i => &$value) {
    $value = $epithets[$epithetsRandomKeys[$i]] . " " . $wishes[$wishesRandomKeys[$i]];
}

$wishString = implode(', ', $generatedWishes);

echo PHP_EOL . "Дорогой {$name}, от всего сердца поздравляю тебя с днем рождения, желаю {$wishString}!" . PHP_EOL;

