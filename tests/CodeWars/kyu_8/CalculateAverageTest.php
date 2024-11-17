<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\CalculateAverage;

class CalculateAverageTest extends TestCase
{
    private function doTest($array, $expected) {
        $this->assertSame($expected, CalculateAverage::find_average($array), message: "setAlarm(".json_encode($array).") returned an incorrect answer.");
    }
    public function testExamples() {
        // $this->assertSame(0.0, find_average([]));
        // $this->assertSame(1.0, find_average([1, 1, 1]));
        // $this->assertSame(2.0, find_average([1, 2, 3]));
        // $this->assertSame(2.5, find_average([1, 2, 3, 4]));
        $this->doTest([], 0.0);
        $this->doTest([1, 1, 1], 1.0);
        $this->doTest([1, 2, 3], 2.0);
        $this->doTest([1, 2, 3, 4], 2.5);
      }

      public function testFixed() {
        $this->assertSame(3.0, CalculateAverage::find_average([5, 2, 4, 1, 3]));
        $this->assertSame(6.0, CalculateAverage::find_average([2, 4, 6, 6, 19, -1]));
        $this->assertSame(4.0, CalculateAverage::find_average([3.5, 4.5, 2.5, 5.5, 6.5, 1.5]));
        $this->assertSame(365 / 6, CalculateAverage::find_average([56, 78, 88, 95, 45, 3]));
        $this->assertSame(83324.0, CalculateAverage::find_average([83324]));
      }
      protected function solution(array $a): float {
        return count($a) ? array_sum($a) / count($a) : 0;
      }
      protected function randomArray(): array {
        return array_map(function () {return rand(-100, 100);}, range(1, rand(10, 100)));
      }
      public function testRandom() {
        for ($i = 0; $i < 1e3; $i++) $this->assertSame($this->solution($a = $this->randomArray()), CalculateAverage::find_average($a));
      }
}
