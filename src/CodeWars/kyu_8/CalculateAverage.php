<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Calculate average
DESCRIPTION:
Write a function which calculates the average of the numbers in a given array.

Note: Empty arrays should return 0.

FUNDAMENTALS ARRAYS
*/
class CalculateAverage
{
    public static function find_average(array $array): float 
    {
        $result = ( float ) 0.0;
        if( count($array) === 0 ) { return $result; }
        foreach( $array as $item )
            $result += $item;
        return ( $result <> 0 ) ? ( $result / count($array) ) : 0.0;
    }
}
