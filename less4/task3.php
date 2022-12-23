<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
];

function findItemInBox(string $itemName, array $box): bool
{
    $isFound = false;
    foreach ($box as $boxItem) {

        if ($boxItem == $itemName) {
            $isFound = true;
            break;
        }

        if (is_array($boxItem)) {
            $isFound = findItemInBox($itemName, $boxItem);
            if ($isFound) break;
        }
    }

    return $isFound;
}

var_dump(findItemInBox("Ключ", $box));