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

    $answer = readline("Выберите нужную цифру? ");

    if ((int)$answer === $correctAnswerIs) {
        echo PHP_EOL . "Ответ верный! Поздравляю!" . PHP_EOL;
        $isAnswerCorrect = true;
    } else {
        echo PHP_EOL . "Ответ неверный!" . PHP_EOL;
    }
}


