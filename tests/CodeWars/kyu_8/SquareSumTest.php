<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\SquareSum;

class SquareSumTest extends TestCase
{
  
    private function doTest(array $arr, int $expected) {
        $this->assertSame($expected, SquareSum::square_sum($arr), "square_sum(" . json_encode($arr) . ") returned an incorrect answer.");
    }

    public function testSample() {
        $this->doTest([1, 2], 5);
        $this->doTest([1, 2, 2], 9);
        $this->doTest([0, 3, 4, 5], 50);
        $this->doTest([], 0);
        $this->doTest([-1, -2], 5);
        $this->doTest([-1, 0, 1], 2);
    }

}
