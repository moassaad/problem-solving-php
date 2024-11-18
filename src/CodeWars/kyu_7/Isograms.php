<?php

namespace ProblemSolve\App\CodeWars\kyu_7;


/*
7 kyu
Isograms
DESCRIPTION:
An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

Example: (Input --> Output)

"Dermatoglyphics" --> true
"aba" --> false
"moOse" --> false (ignore letter case)
STRINGS FUNDAMENTALS
*/
class Isograms
{
    public static function isIsogram(string $string): bool 
    {
        $isogram = [];
        if( strlen($string) === 0 ) { return true; }
        $string = strtolower($string);
        for( $index = 0 ; $index < strlen($string) ; $index++ )
        {
            if(in_array($string[$index], $isogram))
            {
                return false;
            }
            $isogram[] = $string[$index];
        }
        return true;
    }

    function isIsogram1($string) {
        if (empty($string)){
          return true;
        }
        
        $array = str_split(strtolower($string));
        return (count($array) === count(array_unique($array)));
    }
    function isIsogram2($s) {
        return strlen(count_chars(strtolower($s),3)) === strlen($s);
    }
    function isIsogram3($string) {
        $arrayOfString = str_split(strtolower($string));
        return count($arrayOfString) == count(array_unique($arrayOfString));
    }
    function isIsogram4($string) {
        return !preg_match("`(.).*\\1`i", $string);
    }
    function isIsogram5($string) {
        $string = mb_strtolower($string);
        
        $stringLen = mb_strlen($string);
        for ($i = 0; $i < $stringLen - 1; $i++) {
          for ($j = $i + 1; $j < $stringLen; $j++) {
            if ($string[$i] === $string[$j]) return false;
          }
        }
          
        return true;
    }
}
