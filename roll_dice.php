<?php

$firstName = 'Pancho';
echo $firstName . PHP_EOL;

define('SIDES_OF_DICE', 6);

$roll = mt_rand(1, SIDES_OF_DICE);

echo "You rolled {$roll}\n";