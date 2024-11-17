<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\VolumeOfACuboid;

class VolumeOfACuboidTest extends TestCase
{
    private function doTest($length, $width, $height, $expected) {
        $this->assertSame($expected, VolumeOfACuboid::get_volume_of_cuboid($length, $width, $height), "get_volume_of_cuboid($length, $width, $height) returned an incorrect answer.");
    }
    public function testExamples() {
        // $this->assertEquals(4, get_volume_of_cuboid(1, 2, 2));
        // $this->assertEquals(60, get_volume_of_cuboid(6, 2, 5));
        $this->doTest(1, 2, 2, 4);
        $this->doTest(6, 2, 5, 60);
    }
    public function testFixed() {
        $this->assertSame(1, VolumeOfACuboid::get_volume_of_cuboid(1, 1, 1));
        $this->assertSame(4, VolumeOfACuboid::get_volume_of_cuboid(1, 1, 4));
        $this->assertSame(12, VolumeOfACuboid::get_volume_of_cuboid(1, 4, 3));
        $this->assertSame(10, VolumeOfACuboid::get_volume_of_cuboid(2, 1, 5));
        $this->assertSame(80, VolumeOfACuboid::get_volume_of_cuboid(20, 2, 2));
        $this->assertSame(100, VolumeOfACuboid::get_volume_of_cuboid(25, 2, 2));
        $this->assertSame(1000, VolumeOfACuboid::get_volume_of_cuboid(10, 10, 10));
      }
      protected function solution($l, $w, $h) {
        return $l * $w * $h;
      }
      public function testRandom() {
        global $kata;
        for ($i = 0; $i < 1e3; $i++) $this->assertSame($this->solution($l = rand(1, 100), $w = rand(1, 100), $h = rand(1, 100)), VolumeOfACuboid::get_volume_of_cuboid($l, $w, $h));
      }
}
