<?php

declare(strict_types=1);

namespace PhpOffice\PhpSpreadsheetTests\Shared\Trend;

use PhpOffice\PhpSpreadsheet\Shared\Trend\LinearBestFit;
use PHPUnit\Framework\TestCase;

class LinearBestFitTest extends TestCase
{
    const LBF_PRECISION = 1.0E-8;

    /**
     * @dataProvider providerLinearBestFit
     */
    public function testLinearBestFit(
        mixed $expectedSlope,
        mixed $expectedIntersect,
        mixed $expectedGoodnessOfFit,
        mixed $expectedEquation,
        mixed $yValues,
        mixed $xValues
    ): void {
        $bestFit = new LinearBestFit($yValues, $xValues);
        $slope = $bestFit->getSlope(1);
        self::assertEqualsWithDelta($expectedSlope[0], $slope, self::LBF_PRECISION);
        $slope = $bestFit->getSlope();
        self::assertEqualsWithDelta($expectedSlope[1], $slope, self::LBF_PRECISION);
        $intersect = $bestFit->getIntersect(1);
        self::assertEqualsWithDelta($expectedIntersect[0], $intersect, self::LBF_PRECISION);
        $intersect = $bestFit->getIntersect();
        self::assertEqualsWithDelta($expectedIntersect[1], $intersect, self::LBF_PRECISION);

        $equation = $bestFit->getEquation(2);
        self::assertEquals($expectedEquation, $equation);

        self::assertSame($expectedGoodnessOfFit[0], $bestFit->getGoodnessOfFit(6));
        self::assertSame($expectedGoodnessOfFit[1], $bestFit->getGoodnessOfFit());
    }

    public static function providerLinearBestFit(): array
    {
        return require 'tests/data/Shared/Trend/LinearBestFit.php';
    }
}
