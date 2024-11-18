<?php

namespace ProblemSolve\Tests\CodeWars\kyu_7;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_7\Isograms;

class IsogramsTest extends TestCase
{
    public function testSampleTests() {
        $this->assertSame(true, Isograms::isIsogram("Dermatoglyphics"));
        $this->assertSame(true, Isograms::isIsogram("isogram"));
        $this->assertSame(false, Isograms::isIsogram("aba"), "same chars may not be adjacent");
        $this->assertSame(false, Isograms::isIsogram("moOse"), "same chars may not be same case");
        $this->assertSame(false, Isograms::isIsogram("isIsogram"));
        $this->assertSame(true, Isograms::isIsogram(""), "an empty string is a valid isogram");
    }
}
