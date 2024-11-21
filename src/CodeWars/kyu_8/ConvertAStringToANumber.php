<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Convert a String to a Number!
Note: This kata is inspired by Convert a Number to a String!. Try that one too.

Description
We need a function that can transform a string into a number. What ways of achieving this do you know?

Note: Don't worry, all inputs will be strings, and every string is a perfectly valid representation of an integral number.

Examples
"1234" --> 1234
"605"  --> 605
"1405" --> 1405
"-7" --> -7
PARSING STRINGS FUNDAMENTALS
*/
class ConvertAStringToANumber
{
    public static function stringToNumber(string $str): int
    {
        return (int) $str;
    }
    function stringToNumber1($str): int {
        return intval($str);
    }
    function stringToNumber2($str) { return +$str; }
    function stringToNumber3($str) {
        return $str/1;
    }
}