<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
7 kyu
Disemvowel Trolls

DESCRIPTION:
Trolls are attacking your comment section!

A common way to deal with this situation is to remove all of the vowels from the trolls' comments, neutralizing the threat.

Your task is to write a function that takes a string and return a new string with all vowels removed.

For example, the string "This website is for losers LOL!" would become "Ths wbst s fr lsrs LL!".

Note: for this kata y isn't considered a vowel.

STRINGS | REGULAR EXPRESSIONS | FUNDAMENTALS
*/
class DisemvowelTrolls
{
    public static function disemvowel(string $s): string 
    {
        $result = '';
        $vowel = ['a','e','i','o','u','A','E','I','O','U'];
        if( strlen($s) === 0 ) { return $result; }
        for( $index = 0 ; $index < strlen($s) ; $index++ )
            if(!in_array($s[$index], $vowel))
                $result .= $s[$index];
        return $result;
    }
    public static function disemvowel_1(string $s): string 
    {
        return preg_replace('/[aeiouAEIOU]/', '', $s);
    }
    function disemvowel_2($string) {
        return preg_replace("/[aeiou]/i", "", $string);
    }
    function disemvowel_3($string) {
        $string = str_ireplace(['a', 'e', 'i', 'o', 'u'], '', $string);
        return $string;
    }
    function disemvowel_4(string $str): string {
        return str_replace(str_split('AEIOUaeiou'), '', $str);
    }
}
