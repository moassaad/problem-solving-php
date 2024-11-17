<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\ReversedSequence;

class ReversedSequenceTest extends TestCase
{
    private function doTest(int $n, array $expected)
    {
        $this->assertSame($expected, ReversedSequence::reverseSeq($n), "reverseSeq($n) returned an incorrect value.");
    }

    public function testSampleTests()
    {
        $this->doTest(1, [1]);
        $this->doTest(5, [5, 4, 3, 2, 1]);
    }
    public function testFixedTests()
    {
        $this->doTest(1, [1]);
        $this->doTest(5, [5, 4, 3, 2, 1]);
        $this->doTest(6, [6, 5, 4, 3, 2, 1]);
        $this->doTest(100, range(100, 1));
        $this->doTest(10000, range(10000, 1));
        $this->doTest(100000, range(100000, 1));
        $this->doTest(1000000, range(1000000, 1));
    }

    public function testRandomTests()
    {
        for ($t = 0; $t < 100; $t++) {
            $n = rand(1, 10000);
            $expected = range($n, 1);
            $this->doTest($n, $expected);
        }
    }
}
