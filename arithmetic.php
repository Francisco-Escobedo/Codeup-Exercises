<?php
    
// Global variables do not act the same here as they do in JavaScript. When outside a functions scope, a variable is its own entity.
$a= 53;

$b= 44;

function add($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be NUMBERS \n";
    }
    
}

function subtract($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
        return $a - $b;
    } else {
        return "ERROR: Both arguments, \$a: $a and \$b: $b,  must be NUMBERS \n";
    }
}

function multiply($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
        return $a * $b;
    } else {
        return "ERROR: Both arguments, \$a: $a and \$b: $b, must be NUMBERS \n";
    }
}

function divide($a, $b)
{
    if (is_numeric($a) && is_numeric($b) && $b !== 0){
        return $a / $b;
    } else {
        return "ERROR: Both arguments, \$a: $a and \$b: $b, must be NUMBERS \n The second argument may NOT be ZERO\n";
    }
}

function modulus($a, $b)
{
    if (is_numeric($a) && is_numeric($b)){
        return $a % $b;
    } else {
        return "ERROR: Both arguments, \$a: $a and \$b: $b, must be NUMBERS \n";
    }
}

// Add code to test your functions here

echo add(2, 5);
echo "\n";
echo subtract(2,"waffle");
echo "\n";
echo multiply(2,5);
echo "\n";
echo divide(0, 25);
echo "\n";
echo modulus(25,4);
echo "\n";

