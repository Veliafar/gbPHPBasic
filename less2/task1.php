<?php

$isAnswerCorrect = false;
$correctAnswerIs = 2;

while (!$isAnswerCorrect) {

    echo PHP_EOL;
    echo "Годы правления Николая II?" . PHP_EOL;
    echo "1) 1881 - 1894" . PHP_EOL;
    echo "2) 1894 - 1917" . PHP_EOL; // true
    echo "3) 1896 - 1905" . PHP_EOL;
    echo "4) 1896 - 1918" . PHP_EOL;

    $answer = (int)readline("Выберите нужную цифру: ");

    switch (true) {
        case $answer === $correctAnswerIs:
            echo PHP_EOL . "Ответ верный! Поздравляю!" . PHP_EOL;
            $isAnswerCorrect = true;
            break;
        case $answer == 1:
        case $answer == 3:
        case $answer == 4:
            echo PHP_EOL . "Ответ неверный!" . PHP_EOL;
            break;
        default:
            echo PHP_EOL . "Введите корректный ответ!" . PHP_EOL;
    }
    echo "-----------------------------------" . PHP_EOL;
}



