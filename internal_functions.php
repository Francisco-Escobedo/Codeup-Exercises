<?php

// TODO: Create your inspect() function here

function inspect($var){
    if (is_numeric($var)){
        if (is_float($var)){
            return " The float is $var";
        } else {
            return " The integer is $var";
        }
    } elseif (is_null($var)){
        return " The value is NULL";
    } elseif (is_bool($var)){
        if (boolval($var) == 1){
            return " The boolean is True";
        } elseif(boolval($var) == 0){
            return " The boolean is False";
        }
    } elseif (is_string($var)){
        if (empty($var)) {
            return " The string is empty";
        } else {
            return " The string is $var";
        }
    } elseif (is_array($var)) {
        if  (empty($var)) {
            return " The value is an empty array";
        } else {
            return " The value is an array";
        }
    }
}

// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1:' . inspect($num1) . PHP_EOL;

echo 'Inspecting $num2:'. inspect($num2) . PHP_EOL;

echo 'Inspecting $num3:'. inspect($num3) . PHP_EOL;

echo 'Inspecting $num4:'. inspect($num4) . PHP_EOL;

echo 'Inspecting $null:'. inspect($null) . PHP_EOL;

echo 'Inspecting $bool1:'. inspect($bool1) . PHP_EOL;

echo 'Inspecting $bool2:'. inspect($bool2) . PHP_EOL;

echo 'Inspecting $string1:'. inspect($string1) . PHP_EOL;

echo 'Inspecting $string2:'. inspect($string2) . PHP_EOL;

echo 'Inspecting $array1:'. inspect($array1) . PHP_EOL;

echo 'Inspecting $array2:'. inspect($array2) . PHP_EOL;
