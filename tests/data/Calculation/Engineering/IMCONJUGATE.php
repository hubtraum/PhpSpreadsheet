<?php

declare(strict_types=1);

use PhpOffice\PhpSpreadsheet\Calculation\Information\ExcelError;

return [
    [
        '12.34-5.67j',
        '12.34+5.67j',
    ],
    [
        ExcelError::NAN(),
        'Invalid Complex Number',
    ],
    [
        '3.5-2.5i',
        '3.5+2.5i',
    ],
    [
        '3.5-i',
        '3.5+i',
    ],
    [
        '3.5',
        '3.5',
    ],
    [
        '3.5+i',
        '3.5-i',
    ],
    [
        '3.5+2.5i',
        '3.5-2.5i',
    ],
    [
        '1-2.5i',
        '1+2.5i',
    ],
    [
        '1-i',
        '1+i',
    ],
    [
        '1',
        '1',
    ],
    [
        '1+i',
        '1-i',
    ],
    [
        '1+2.5i',
        '1-2.5i',
    ],
    [
        '-2.5i',
        '2.5i',
    ],
    [
        '-i',
        'i',
    ],
    [
        '0.0',
        '0',
    ],
    [
        'i',
        '-i',
    ],
    [
        '2.5i',
        '-2.5i',
    ],
    [
        '-1-2.5i',
        '-1+2.5i',
    ],
    [
        '-1-i',
        '-1+i',
    ],
    [
        '-1',
        '-1',
    ],
    [
        '-1+i',
        '-1-i',
    ],
    [
        '-1+2.5i',
        '-1-2.5i',
    ],
    [
        '-3.5-2.5i',
        '-3.5+2.5i',
    ],
    [
        '-3.5-i',
        '-3.5+i',
    ],
    [
        '-3.5',
        '-3.5',
    ],
    [
        '-3.5+i',
        '-3.5-i',
    ],
    [
        '-3.5+2.5i',
        '-3.5-2.5i',
    ],
];
