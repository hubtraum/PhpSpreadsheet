<?php

declare(strict_types=1);

return [
    ['exception', ''],
    ['#VALUE!', '"ABC"'],
    [0, '0'],
    [0.881374, '1'],
    [1.443635, '"2"'],
    [-0.881374, '-1'],
    [14.508658, '1000000'],
    // ['#NUM!', 2], Don't know if NAN is possible
    [0, 'Q15'],
    [0, 'false'],
    [0.881373587, 'true'],
    [0.481211825, 'A2'],
];
