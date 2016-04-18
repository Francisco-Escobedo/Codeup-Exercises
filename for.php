<?php

echo "Please enter a starting number, ending number, and the increment you'd like to count by.\n";

echo "Starting Number: ";
$userStarting = trim(fgets(STDIN));

echo "Ending Number: ";
$userEnding = trim(fgets(STDIN));

echo "Counting Increment: ";
$userIncrement = trim(fgets(STDIN));

if ((is_numeric($userStarting) == true) && (is_numeric($userStarting) == true) && (is_numeric($userStarting) == true)){

    if ($userIncrement == 0) {
        for ($userStarting; $userStarting <= $userEnding; $userStarting +=1){
        echo "$userStarting\n";
        }
    } else {
        for ($userStarting; $userStarting <= $userEnding; $userStarting += $userIncrement) {
            echo "$userStarting\n";
        }
    }

} else { 
    echo "Please ensure the three parameters are all numeric values.\n";
}