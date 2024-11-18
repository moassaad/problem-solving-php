<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\CountOfPositivesSumOfNegatives;

class CountOfPositivesSumOfNegativesTest extends TestCase
{
    private function doTest($array, $expected) {
        $this->assertSame($expected, CountOfPositivesSumOfNegatives::countPositivesSumNegatives($array), message: "countPositivesSumNegatives(".json_encode($array).") returned an incorrect answer.");
    }
    public function testExample() {
        $this->doTest([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], [10, -65]);
        $this->doTest([0, 2, 3, 0, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14], [8, -50]);
    }

    public function testIfTheInputArrayIsEmptyReturnEmptyArray() {
        $this->assertSame([], CountOfPositivesSumOfNegatives::countPositivesSumNegatives([]), 'If the input array is empty, return empty array');
        $this->assertSame([], CountOfPositivesSumOfNegatives::countPositivesSumNegatives(null), 'If the input array is empty, return empty array');
    }
    
    
}
