<?php

namespace ProblemSolve\Tests\CodeWars\kyu_8;

use PHPUnit\Framework\TestCase;
use ProblemSolve\App\CodeWars\kyu_8\EvenOrOdd;

class EvenOrOddTest extends TestCase
{
    public function testPositiveOddNumbers() {
        $this->assertSame("Odd", EvenOrOdd::even_or_odd(1));
      }
      
      public function testPositiveEvenNumbers() {
        $this->assertSame("Even", EvenOrOdd::even_or_odd(2));
      }
      
      public function testZeroIsEven() {    
        $this->assertSame("Even", EvenOrOdd::even_or_odd(0));
      }
      
      public function testNegativeEvenNumbers() {    
        $this->assertSame("Even", EvenOrOdd::even_or_odd(-2));
      }
      
      public function testNegativeOddNumbers() {    
        $this->assertSame("Odd", EvenOrOdd::even_or_odd(-1));
      }
}
