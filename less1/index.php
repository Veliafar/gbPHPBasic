<?php

echo PHP_EOL;

$name = readline("Ваше имя? ");

$taskNameQuestion = "задача стоит перед вами сегодня";
$taskTimeQuestion = "Сколько примерно времени эта задача займет в часах?";

$task1 = readline("Какая {$taskNameQuestion}? ");
$task1Time = readline("{$taskTimeQuestion} ");

$task2 = readline("Какая еще {$taskNameQuestion}? ");
$task2Time = readline("{$taskTimeQuestion} ");

$task3 = readline("Третья {$taskNameQuestion}? ");
$task3Time = readline("{$taskTimeQuestion} ");

$totalTime = (int)$task1Time + (int)$task2Time + (int)$task3Time;

echo PHP_EOL . "{$name}, сегодня у вас запланировано 3 приоритетных задачи на день: " . PHP_EOL;
echo "- {$task1} ({$task1Time}ч)" . PHP_EOL;
echo "- {$task2} ({$task2Time}ч)" . PHP_EOL;
echo "- {$task3} ({$task3Time}ч)" . PHP_EOL;
echo "Примерное время выолнения плана: {$totalTime}ч" . PHP_EOL;

