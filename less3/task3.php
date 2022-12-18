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

$groups = [
    'ИТ20',
    'БАП20',
];

$familyArr = [
    'Сидоров',
    'Винницкий',
    'Федоров',
    'Абрамов',
    'Казаченко',
    'Прокапенко',
];
$nameArr = [
    'Денис',
    'Игорь',
    'Алексей',
    'Андрей',
    'Александр',
    'Евгений',
];

$familyArrRandomKeys = array_rand($familyArr, 6);
$nameArrRandomKeys = array_rand($nameArr, 6);
$groupsRandomKeys = array_merge([], array_rand($groups, 2), array_rand($groups, 2), array_rand($groups, 2));

foreach ($familyArrRandomKeys as $i => $value) {
    $name = "{$familyArr[$i]} {$nameArr[$i]}";
    $students[$groups[$groupsRandomKeys[$i]]][$name] = random_int(1, 5);
}
echo PHP_EOL . "Группы сутдентов: " . PHP_EOL;
print_r($students);

$groupAverageScore1 = 0;
$groupAverageScore2 = 0;

$exclusionList = [
    $groups[0] => [],
    $groups[1] => [],
];

foreach ($students as $key => $group) {
    if ($key === $groups[0]) {
        foreach ($group as $name => $studentScore) {
            $groupAverageScore1 += $studentScore;
            if ($studentScore < 3) {
                $exclusionList[$groups[0]][$name] = $studentScore;
            }
        }
    }

    if ($key === $groups[1]) {
        foreach ($group as $name => $studentScore) {
            $groupAverageScore2 += $studentScore;
            if ($studentScore < 3) {
                $exclusionList[$groups[1]][$name] = $studentScore;
            }
        }
    }
}

$groupAverageScore1 = $groupAverageScore1 / count($students[$groups[0]]);
$groupAverageScore2 = $groupAverageScore2 / count($students[$groups[1]]);

if ($groupAverageScore1 > $groupAverageScore2) {
    echo PHP_EOL . "Успеваемость группы {$groups[0]} выше - в среднем это {$groupAverageScore1}";
} else {
    echo PHP_EOL . "Успеваемость группы {$groups[1]} выше - в среднем это {$groupAverageScore2}";
}

echo PHP_EOL . PHP_EOL . "Список на отчисление: " . PHP_EOL;
print_r($exclusionList);


