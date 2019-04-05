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
        echo $value;
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

//This function returns the average number in an array
function average($array)
{
    $number = 0;
    foreach($array as $value)
    {
        $number += $value;
    }
    return $number / sizeof($array);
}

function removeDups($array)
{
//    for ($i = 0; $i <sizeof($array); $i++)
//    {
//        $number = $array[$i];
//        for($j =($i+1); $j <sizeof($array); $j++)
//        {
//            if($array[$j]== $number)
//            {
//                unset($array[$i]);
//            }
//        }
//    }
    //return $array;
    return array_unique($array);

}

function distribution($array)
{
    $keys = array();
    //$newArray = removeDups($array);
    //$newArray = sort($newArray);
    $newArray = array(6,9,7,8);

    foreach($newArray as $number)
    {
        $counter= 0;
        foreach($array as $number2)
        {
            if($number==$number2)
            {
                $counter++;
            }
        }
        $keys [] = $counter;
    }
//    for($i=0; $i< sizeof($newArray); $i++)
//    {
//        $finalArray[$newArray[$i]]=$keys[$i];
//    }

    foreach($newArray as $key => $value)
    {
        $finalArray[$value] = $keys[$key];
    }
    return $finalArray;
}
