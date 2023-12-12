<?php

declare(strict_types=1);

return [
    [
        0.03263913041829,
        10.00001131, 9, 2, false,
    ],
    [
        0.06809400387,
        10.00001131, 9, 2, true,
    ],
    [
        0.112020903828,
        6, 3, 2, false,
    ],
    [
        0.576809918873,
        6, 3, 2, true,
    ],
    'Boolean as numeric' => [
        0.576809918873,
        6, 3, 2, 1,
    ],
    [
        '#VALUE!',
        'NAN', 3, 2, true,
    ],
    [
        '#VALUE!',
        6, 'NAN', 2, true,
    ],
    [
        '#VALUE!',
        6, 3, 'NAN', true,
    ],
    [
        '#VALUE!',
        6, 3, 2, 'NAN',
    ],
    'Value < 0' => [
        '#NUM!',
        -6, 3, 2, true,
    ],
    'A < 0' => [
        '#NUM!',
        6, -3, 2, true,
    ],
    'A = 0' => [
        '#NUM!',
        6, 0, 2, true,
    ],
    'B < 0' => [
        '#NUM!',
        6, 3, -2, true,
    ],
    'B = 0' => [
        '#NUM!',
        6, 3, 0, true,
    ],
];
