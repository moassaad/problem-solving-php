<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\L1SetAlarm;

class L1SetAlarmTest extends TestCase
{
    private function doTest(bool $employed, bool $vacation, $expected) {
        $this->assertSame($expected, L1SetAlarm::setAlarm($employed, $vacation), message: "setAlarm($employed, $vacation) returned an incorrect answer.");
    }
    public function testTests() {
        // $this->assertSame(false, setAlarm(true, true));
        // $this->assertSame(false, setAlarm(false, true));
        // $this->assertSame(true, setAlarm(true, false));
        // $this->assertSame(false, setAlarm(false, false));
        $this->doTest(true, true, false);
        $this->doTest(false, true, false);
        $this->doTest(true, false, true);
        $this->doTest(false, false, false);
      }
}
