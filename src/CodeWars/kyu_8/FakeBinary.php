<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Fake Binary
DESCRIPTION:
Given a string of digits, you should replace any digit below 5 with '0' and any digit 5 and above with '1'. Return the resulting string.

Note: input will never be an empty string

FUNDAMENTALS STRINGS ARRAYS
*/
class FakeBinary
{
    public static function fake_bin(string $s): string 
    {
        $result = '';
        if( strlen($s) === 0 ) { return $result; }
        for( $index = 0 ; $index < strlen($s) ; $index++ )
            if(is_numeric($s[$index]))
                if(((int) $s[$index]) < 5) { $result .= '0'; }
                else {  $result .= '1'; }
        return $result;
    }
    function fake_bin1(string $s): string {
        return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
    }
    function fake_bin2(string $s): string {
        return strtr($s, '0123456789', '0000011111');
    }
    function fake_bin3(string $s): string {
        $s = str_replace(range(0,4), 0, $s);
        $s = str_replace(range(5,9), 1, $s);
        
        return $s;
    }
}
