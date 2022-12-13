<?php

$isEnteredNumCorrect = false;

$fingerNumText = "Номер пальца: ";

while (!$isEnteredNumCorrect) {
    $enteredNum = (int)readline(PHP_EOL . "Введите число, чтобы узнать номер пальца: ");

    if ($enteredNum <= 0) {
        continue;
    }

    $isEnteredNumCorrect = true;

    $rest = $enteredNum % 8;

    switch (true) {
        case $rest >= 1 && $rest <= 5:
            echo $fingerNumText . $rest . PHP_EOL;
            break;
        case $rest == 0:
            echo $fingerNumText . 2 . PHP_EOL;
            break;
        case $rest == 7:
            echo $fingerNumText . 3 . PHP_EOL;
            break;
        case $rest == 6:
            echo $fingerNumText . 4 . PHP_EOL;
            break;
    }
}