<?php

$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3
    ],
    'БАП20' => [
        'Антонов Антон' => 4
    ]
];

$groups = [];

foreach ($students as $key => $value) {
    $groups[] = $key;
}

$familyList = [
    'Сидоров',
    'Винницкий',
    'Федоров',
    'Абрамов',
    'Казаченко',
    'Прокапенко',
];
$nameList = [
    'Денис',
    'Игорь',
    'Алексей',
    'Андрей',
    'Александр',
    'Евгений',
];

foreach ($familyList as $value) {
    $name = "{$nameList[array_rand($nameList)]} {$familyList[array_rand($familyList)]}";
    $students[$groups[array_rand($groups)]][$name] = random_int(1, 5);
}
echo PHP_EOL . "Группы сутдентов: " . PHP_EOL;
print_r($students);

$groupAverageScore = [];
$exclusionList = [];

foreach ($groups as $groupName) {
    $groupAverageScore[$groupName] = 0;
    $exclusionList[$groupName] = [];
}

foreach ($students as $groupName => $groupStudents) {
    foreach ($groupStudents as $name => $score) {
        $groupAverageScore[$groupName] += $score;
        if ($score < 3) {
            $exclusionList[$groupName][$name] = $score;
        }
    }
}


$bestGroupName = '';
$bestGroupAverageScore = 0;

foreach ($groupAverageScore as $key => &$value) {
    $value = $value / count($students[$key]);

    if ($bestGroupAverageScore < $value) {
        $bestGroupAverageScore = $value;
        $bestGroupName = $key;
    }
}

echo PHP_EOL . "Успеваемость группы {$bestGroupName} выше - в среднем это {$bestGroupAverageScore} баллов";

echo PHP_EOL . PHP_EOL . "Список на отчисление: " . PHP_EOL;
print_r($exclusionList);


