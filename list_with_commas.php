<?php


$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

$alpha = ((bool) 1);
$noaplha = ((bool) 0);

function humanizedList($physicistsArray, $parameter=false){
    if ($parameter){
        asort($physicistsArray);
    } else { 
    }
    $lastScientist = array_pop($physicistsArray);
    $backToString = implode(', ', $physicistsArray);
    return 'Some of the most famous fictional theoretical physicists are '. $backToString. ', and '. $lastScientist;
}

echo humanizedList($physicistsArray);
echo "\n"; 
