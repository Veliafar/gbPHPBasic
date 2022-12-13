<?php

require "taskClass.php";

echo PHP_EOL;

$name = readline("Ваше имя? ");

$taskNameQuestion = "Какая задача стоит перед вами сегодня";
$taskTimeQuestion = "Сколько примерно времени эта задача займет в часах?";
$taskCount = 0;
$tasks = [];
$totalTaskTime = 0;

$taskCount = (int)readline("Сколько задач у Вас на сегодня? ");


for ($i = 0; $i < $taskCount; $i++ ) {

    $taskNum = $i + 1;

    $task = new Task(
        readline("{$taskNum}) {$taskNameQuestion}? "),
        (int)readline("{$taskTimeQuestion} ")
    );

    $tasks[] = $task;
}

if ($taskCount < 1) {
    echo PHP_EOL . "У Вас нет задач на сегодня!" . PHP_EOL;
    return;
}

echo PHP_EOL . "{$name}, количество запланированных задач - {$taskCount}. вот они: " . PHP_EOL;

foreach ($tasks as &$value) {
    echo "- {$value->name} ({$value->time}ч)" . PHP_EOL;
    $totalTaskTime += $value->time;
}

echo "Примерное время выолнения плана: {$totalTaskTime}ч" . PHP_EOL;


