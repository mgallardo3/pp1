<?php
/**
 * Created by PhpStorm.
 * User: homefolder
 * Date: 2019-04-03
 * Time: 21:01
 */

//This function prints an array
function printArr($array)
{
    foreach($array as $value)
    {
        echo $value . " ";
    }
}

//This function returns the largest value in an array
function largest($array)
{
    $current = 0;
    for($i =0; $i<sizeof($array); $i++)
    {
        if ($current < $array[$i])
        {
            $current = $array[$i];
        }
    }
    return $current;
}

