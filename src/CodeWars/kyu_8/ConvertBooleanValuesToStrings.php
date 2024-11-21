<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Convert boolean values to strings 'Yes' or 'No'.

Complete the method that takes a boolean value and return a "Yes" string for true, or a "No" string for false.

FUNDAMENTALS

*/
class ConvertBooleanValuesToStrings
{
    public static function boolToWord(bool $bool): string{
        return ($bool) ? "Yes" : "No";
    }

    function boolToWord1($bool){
        if(is_bool($bool) && $bool === true){
          $bool = 'Yes';
        } elseif(is_bool($bool) && $bool === false) {
          $bool = 'No';
        } else {
          throw new \Exception('$bool is not of boolean type');
        }
        return $bool;
    }

    function boolToWord2($bool){
        $options = array("Yes", "No");
        $index = array_rand($options);
        return $options[$index];
    }
}
