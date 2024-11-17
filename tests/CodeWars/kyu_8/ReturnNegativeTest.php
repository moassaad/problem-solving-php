<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\ReturnNegative;

class ReturnNegativeTest extends TestCase
{
    private function doTest($num, $expected) {
        $this->assertSame($expected, ReturnNegative::makeNegative($num), "makeNegative($num) returned an incorrect answer.");
    }
  
    public function testSample() {
        $this->doTest(7, -7);
        $this->doTest(-20, -20);
        $this->doTest(0, 0);
        $this->doTest(0.12, -0.12);
    }
    public function testFixed() {
        $this->doTest(5, -5);
        $this->doTest(-17, -17);
        $this->doTest(0, 0);
        $this->doTest(0.15, -0.15);
    }
  
     public function testRandomPositives() {
        for ($i = 0; $i < 10; $i++) {
            $rand = rand(0, 10000);
            $expected = -abs($rand);
            $this->doTest($rand, $expected);
        }
    }

     public function testRandomNegatives() {
        for ($i = 0; $i < 10; $i++) {
            $rand = rand(-10000, 0);
            $expected = -abs($rand);
            $this->doTest($rand, $expected);
        }
    }
}
