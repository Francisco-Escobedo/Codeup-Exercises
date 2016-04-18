<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $analyseThings) {
    
    // if (is_scalar($analyseThings)){
        if (is_integer($analyseThings)){
            echo "{$analyseThings} is an integer\n";
        } elseif (is_float($analyseThings)) {
            echo "{$analyseThings} is a float\n";
        } elseif (is_bool($analyseThings)) {
            echo "{$analyseThings} is a boolean\n";
        } elseif (is_array($analyseThings)) {
            print_r($analyseThings);
        } elseif (is_null($analyseThings)) {
            echo "{$analyseThings} is null\n";
        } elseif (is_string($analyseThings)){
            echo "{$analyseThings} is a string\n";
        }
    // } else {
    //     echo "Sorry, this value was not scalar\n";
    // }
}