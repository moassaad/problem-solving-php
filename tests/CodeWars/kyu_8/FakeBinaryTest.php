<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\FakeBinary;

class FakeBinaryTest extends TestCase
{
    private function doTest(string $s, string $expected)
    {
        $this->assertSame($expected, FakeBinary::fake_bin($s), "fake_bin('$s') returned an incorrect value.");
    }

    public function testExamples()
    {
        $this->doTest('45385593107843568', '01011110001100111');
        $this->doTest('509321967506747', '101000111101101');
        $this->doTest('366058562030849490134388085', '011011110000101010000011011');
    }
}
