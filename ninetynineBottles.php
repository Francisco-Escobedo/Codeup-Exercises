<?php

$bottleCount = 5;

do {
    usleep(200000);
    echo "$bottleCount bottles of beer on the wall, $bottleCount bottles of beer.\n";
    usleep(200000);
    $bottleCount-=1;
    echo "Take one down and pass it around, $bottleCount bottles of beer on the wall\n";
    usleep(300000);
    if ($bottleCount==1){
    echo "Take one down and pass it around, $bottleCount bottle of beer on the wall.\n";
    }

} while ($bottleCount > 0);