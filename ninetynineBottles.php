<?php

echo "Tell me how many bottles are on the wall";

$bottleCount = trim(fgets(STDIN));

do {
    echo "$bottleCount bottles of beer on the wall, $bottleCount bottles of beer."
    $bottleCount--;
} while ($bottleCount>1);