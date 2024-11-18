<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\YouOnlyNeedOneBeginner;
use stdClass;

class YouOnlyNeedOneBeginnerTest extends TestCase
{
    // test function names should start with "test"
    public function testThatSomethingShouldHappen() {
        $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "a"));
        $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "f"));
        $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "c"));
        $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "y"));
        $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), null));
        
        $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "a"));
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "b"));
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "c"));
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "d"));
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "e"));
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "f"));

       $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), "y"));
       $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), null));
       $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), array()));
       $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'b', 'c', 'd', 'e', "f"), new stdClass));
       
       $this->assertTrue(YouOnlyNeedOneBeginner::solution(array('a', 'a', 'a'), "a"));
       $this->assertFalse(YouOnlyNeedOneBeginner::solution(array('a', 'a', 'a'), "f"));
    }
}
