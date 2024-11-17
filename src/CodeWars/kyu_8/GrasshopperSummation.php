<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Grasshopper - Summation
Summation
Write a program that finds the summation of every number from 1 to num. The number will always be a positive integer greater than 0. Your function only needs to return the result, what is shown between parentheses in the example below is how you reach that result and it's not part of it, see the sample tests.

For example (Input -> Output):

2 -> 3 (1 + 2)
8 -> 36 (1 + 2 + 3 + 4 + 5 + 6 + 7 + 8)
FUNDAMENTALS MATHEMATICS
 */
class GrasshopperSummation
{

    public static function summation(int $n): int 
    {
        $result = 0;
        if($n <> 0)
            for($counter = 1 ; $counter <= $n ; $counter++)
                $result += $counter;
        return $result;
    }
    public static function summation1($n) {
        return array_sum(range(1, $n));
      }
}
