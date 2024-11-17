<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\QuarterOfTheYear;

class QuarterOfTheYearTest extends TestCase
{
    private function doTest(int $n, int $expected)
    {
        $this->assertSame($expected, QuarterOfTheYear::quarterOf($n), "quarterOf($n) returned an incorrect value.");
    }
    public function testIfQuartersAreCorrect() {
        $this->assertEquals(1, QuarterOfTheYear::quarterOf(2));
        $this->assertEquals(2, QuarterOfTheYear::quarterOf(6));
        $this->assertEquals(3, QuarterOfTheYear::quarterOf(7));
        $this->doTest(2,1);
        $this->doTest(6,2);
        $this->doTest(7,3);
        $this->doTest(13,0);
    }
    private function solution($month) {
        return ceil($month / 3);
    }

    public function testAll() {
        for ($i = 1; $i <= 12; $i++)
            $this->assertEquals($this->solution($i), QuarterOfTheYear::quarterOf($i));
    }

    public function testRandom() {
        for ($i = 0; $i < 100; $i++) {
            $num = rand(1, 12);
            $this->assertEquals($this->solution($num), QuarterOfTheYear::quarterOf($num));
        }
    }
}
