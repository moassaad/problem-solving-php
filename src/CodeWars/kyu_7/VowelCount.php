<?php

namespace ProblemSolve\App\CodeWars\kyu_7;


/*
7 kyu
Vowel Count
DESCRIPTION:
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.

STRINGS FUNDAMENTALS
*/
class VowelCount
{
    public static function getCount(string $str): int 
    {
        $vowel = ['a', 'e', 'i', 'o', 'u'];
        $counter = 0;
        if(empty($str)) { return $counter; }
        for($index = 0; strlen($str)> $index ; $index++)
            if(in_array($str[$index], $vowel)) { $counter++; }
        return $counter;
    }
    function getCount1($str) {;
  
        return preg_match_all('/[aeiou]/i',$str,$matches);
    }
    function getCount2($str) {
        return preg_match_all("/[aeiou]/", $str);
    }
    function getCount3($str) {
        return preg_match_all('/[aeiou]/i', $str);
    }
    function getCount4($str) {
  
        $findLetters = ['a', 'e', 'i', 'o', 'u'];
        // enter your magic here
        
        return sizeof(array_intersect(str_split($str), $findLetters));
    }
}
