<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\DisemvowelTrolls;

class DisemvowelTrollsTest extends TestCase
{
    private $base = "abcdefghijklmnopqrsruvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ?!,@#$%^&*()[]{};         ";
  
    private function doTest(string $s, string $expected)
    {
        $this->assertSame($expected, DisemvowelTrolls::disemvowel($s), "disemvowel('$s') returned an incorrect value.");
    }

    public function testSample()
    {
        $this->doTest("This website is for losers LOL!", "Ths wbst s fr lsrs LL!");
        $this->doTest("No offense but,\nYour writing is among the worst I've ever read", "N ffns bt,\nYr wrtng s mng th wrst 'v vr rd");
        $this->doTest("What are you, a communist?", "Wht r y,  cmmnst?");
    }
}
