<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\GrasshopperSummation;

class GrasshopperSummationTest extends TestCase
{
    private function doTest(int $n, int $expected) {
        $this->assertSame($expected, GrasshopperSummation::summation($n), "summation($n) returned an incorrect answer.");
    }

    public function testThatSummationWorksForExampleTests() {
        $this->doTest(1, 1);
        $this->doTest(2, 3);
        $this->doTest(3, 6);
        $this->doTest(4, 10);
        $this->doTest(5, 15);
    }
}
