<?php

echo PHP_EOL;

$name = readline("Ваше имя? ");

$task1 = readline("Какая задача стоит перед вами сегодня? ");
$task1Time = readline("Сколько примерно времени эта задача займет в часах? ");

$task2 = readline("Какая еще задача стоит перед вами сегодня? ");
$task2Time = readline("Сколько примерно времени эта задача займет в часах? ");

$task3 = readline("Третья задача стоит перед вами сегодня? ");
$task3Time = readline("Сколько примерно времени эта задача займет в часах? ");


echo PHP_EOL . "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день: " . PHP_EOL;
echo "- {$task1} ({$task1Time}ч)" . PHP_EOL;
echo "- {$task2} ({$task2Time}ч)" . PHP_EOL;
echo "- {$task3} ({$task3Time}ч)" . PHP_EOL;
echo "Примерное время выолнения плана: {$task1Time + $task2Time + $task3Time}ч" . PHP_EOL;

