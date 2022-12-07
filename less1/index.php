<?php

echo PHP_EOL;

$name = readline("Ваше имя? ");

$task1 = readline("Какая задача стоит перед вами сегодня? ");
$task1Time = readline("Сколько примерно времени эта задача займет? ");

$task2 = readline("Какая еще задача стоит перед вами сегодня? ");
$task2Time = readline("Сколько примерно времени эта задача займет? ");

$task3 = readline("Третья задача стоит перед вами сегодня? ");
$task3Time = readline("Сколько примерно времени эта задача займет? ");


echo PHP_EOL . "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день: " . PHP_EOL;
echo "- {$task1} ({$task1Time})" . PHP_EOL;
echo "- {$task2} ({$task2Time})" . PHP_EOL;
echo "- {$task3} ({$task3Time})" . PHP_EOL;

