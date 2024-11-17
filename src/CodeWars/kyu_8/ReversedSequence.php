<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Reversed sequence
DESCRIPTION:
Build a function that returns an array of integers from n to 1 where n>0.

Example : n=5 --> [5,4,3,2,1]

FUNDAMENTALS
*/
class ReversedSequence
{
    public static function reverseSeq (int $n): array
    {
        $sequence = [];
        while ($n > 0) 
            $sequence[] = $n--;
        return $sequence;
    }
    public static function reverseSeq1 (int $n): array {
        return range($n, 1); // your code here
    }
}
