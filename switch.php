<?php

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 switch($dayOfWeek) {
    case 1:
        echo "Monday\n";
        echo "=======\n";
        break;
    case 2:
        echo "Tuesday\n";
        echo "=======\n";
        break;
    case 3:
        echo "Wednesday\n";
        echo "=======\n";
        break;
    case 4:
        echo "Thursday\n";
        echo "=======\n";
        break;
    case 5:
        echo "Friday\n";
        echo "=======\n";
        break;
    case 6:
        echo "Saturday\n";
        echo "=======\n";
        break;
    case 7:
        echo "Sunday\n";
        echo "=======\n";
        break;
 }

if ($dayOfWeek == 1){
    echo "Monday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Tuesday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Wednesday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Thursday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Friday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Saturday\n";
    echo "=======\n";
 } elseif ($dayOfWeek == 2){
    echo "Sunday\n";
    echo "=======\n";
 }