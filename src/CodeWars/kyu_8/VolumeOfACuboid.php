<?php

namespace ProblemSolve\App\CodeWars\kyu_8;


/*
8 kyu
Volume of a Cuboid
DESCRIPTION:
Bob needs a fast way to calculate the volume of a cuboid with three values: the length, width and height of the cuboid. Write a function to help Bob with this calculation.

GEOMETRY FUNDAMENTALS MATHEMATICS
*/
class VolumeOfACuboid
{
    public static function get_volume_of_cuboid($length, $width, $height) 
    {
        return $length * $width * $height;
    }
}
