<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Quarter of the year
DESCRIPTION:
Given a month as an integer from 1 to 12, return to which quarter of the year it belongs as an integer number.

For example: month 2 (February), is part of the first quarter; month 6 (June), is part of the second quarter; and month 11 (November), is part of the fourth quarter.

Constraint:

1 <= month <= 12
FUNDAMENTALS MATHEMATICS
*/
class QuarterOfTheYear
{
    public static function quarterOf($month) : int
    {
        $quarters = array(
            1=>[1,2,3],
            2=>[4,5,6],
            3=>[7,8,9],
            4=>[10,11,12],
        );
        foreach($quarters as $quarter => $months)
        {
            if(in_array($month, $months))
            {
                return $quarter;
            }
        }
        return 0;
    }
    public static function quarterOf1($month) 
    {
        $quarter = 0;
        if($month >=1 && $month <=3)
        {
            $quarter = 1;
        }
        else if($month >=4 && $month <=6)
        {
            $quarter = 2;
        }
        else if($month >=7 && $month <=9)
        {
            $quarter = 3;
        }
        else if($month >=10 && $month <=12)
        {
            $quarter = 4;
        }
        return $quarter;
    }
    public static function quarterOf2($month) {
        return ceil($month / 3);
    }
}
