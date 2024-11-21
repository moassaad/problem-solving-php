<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\ConvertANumberToAString;

class ConvertANumberToAStringTest extends TestCase
{
    private function doTest(int $number, string $expected) {
        $this->assertSame($expected, ConvertANumberToAString::numberToString($number), "numberToString($number) returned an incorrect answer.");
    }

    public function testSampleTests() {
        $this->doTest(67, '67');
    }
    public function testFixedTests() {
        $this->doTest(67, '67');
        $this->doTest(79585, '79585');
        $this->doTest(1 + 2, '3');
        $this->doTest(1 - 2, '-1');
    }
    
    public function testRandomTests() {
        for ($cwtests = 0; $cwtests < 200; $cwtests++) {
          $qwe = rand(-1000, 1000);
          $expected = (string)$qwe;
          $this->doTest($qwe, $expected);
        }
    }
}
