<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair programming 1</title>
</head>
<body>
    <h1>Pair programming 1</h1>

</body>
</html>
<?php
//print any errors
ini_set('display_errors',1);
error_reporting(E_ALL);

//include the functions file
include ("functions.php");

//initialize array with numbers
$numbers = array(7,9,8,9,8,8,6);

//call the function printArr
printArr($numbers);

//echo an empty line
echo "<br>";

//call and print the largest function
echo largest($numbers);



