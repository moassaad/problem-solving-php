<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
You only need one - Beginner

DESCRIPTION:
You will be given an array a and a value x. All you need to do is check whether the provided array contains the value.

Array can contain numbers or strings. X can be either.

Return true if the array contains the value, false if not.

FUNDAMENTALS STRINGS ARRAYS
*/
class YouOnlyNeedOneBeginner
{
    public static function solution(array $a, mixed $x) : bool
    {
        if(empty($a)) { return false; }
        foreach($a as $character)
            if($character === $x)
                return true;
        return false;
    }
}
