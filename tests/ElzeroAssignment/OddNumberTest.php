<?php

namespace ProblemSolve\Tests\ElzeroAssignment;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\ElzeroAssignment\OddNumberAssignment\Application;

class OddNumberTest extends TestCase
{
    public function test_elzero()
    {
        $list = [ 3, 7, 3, 5, 11, 9, 7, 1 ];
        $app = new Application($list);

        $this->assertEquals([ 3, 7, 3, 5, 11, 9, 7, 1 ], $app->getOddList());
        $this->assertEquals("{3: 2}{7: 2}", $app->getRepeatedOddList());
        $this->assertEquals("977533111", $app->getLargestNumberList());
    }
}
