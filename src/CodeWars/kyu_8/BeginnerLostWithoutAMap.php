<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Beginner - Lost Without a Map
Given an array of integers, return a new array with each value doubled.

For example:

[1, 2, 3] --> [2, 4, 6]

FUNDAMENTALS ARRAYS
*/
class BeginnerLostWithoutAMap
{
    public static function maps(array $arr): array
    {
        $result = [];
        if(!empty($arr))
            foreach($arr as $item)
                $result[] = $item * 2;
        return $result;
    }
}
