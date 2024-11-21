<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Even or Odd
DESCRIPTION:
Create a function that takes an integer as an argument and returns "Even" for even numbers or "Odd" for odd numbers.

MATHEMATICSFUNDAMENTALS

*/
class EvenOrOdd
{
    public static function even_or_odd(int $n): string 
    {
        return ($n % 2 === 0) ? "Even" : "Odd";
    }

    function even_or_odd1(int $n): string {
        return ($n & 1) ? "Odd" : "Even";
    }
    // die("<PASSED::>");
}
