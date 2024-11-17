<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\BeginnerLostWithoutAMap;

class BeginnerLostWithoutAMapTest extends TestCase
{
    private function doTest(array $input, array $expected)
    {
        $this->assertSame($expected, BeginnerLostWithoutAMap::maps($input), "maps(" . json_encode($input) . ") returned an incorrect value.");
    }

    public function testBasicOperations()
    {
        $this->doTest([1, 2, 3], [2, 4, 6]);
        $this->doTest([4, 1, 1, 1, 4], [8, 2, 2, 2, 8]);
        $this->doTest([2, 2, 2, 2, 2, 2], [4, 4, 4, 4, 4, 4]);
    }
}
