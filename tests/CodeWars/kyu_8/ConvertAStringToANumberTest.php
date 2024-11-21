<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\ConvertAStringToANumber;

class ConvertAStringToANumberTest extends TestCase
{
    private function doTest(string $s, int $expected) {
        $this->assertSame($expected, ConvertAStringToANumber::stringToNumber($s), "stringToNumber('$s') returned an incorrect value.");
    }

    public function testSampleTests() {
        $this->doTest("1234", 1234);
        $this->doTest("605", 605);
        $this->doTest("1405", 1405);
        $this->doTest("-7", -7);
    }
    public function testFixedTests() {
        $this->doTest("1234", 1234);
        $this->doTest("605", 605);
        $this->doTest("1405", 1405);
        $this->doTest("-7", -7);
    }
    
    public function testRandomTests() {
        for ($i = 0; $i < 100; $i++) {
          $expected = rand(0, 1e6) - 5e5;
          $s = (string) $expected;
          $this->doTest($s, $expected);
        }
    }
}
