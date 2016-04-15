<?php

$n = 0;

// 0 to 100 by 2's 
do {
    echo "$n\n";
    $n+=2;
} while ($n<=100);

// 100 to -10 by 5's 
$u = 100;

do {
    echo "$u\n";
    $u-=5;
} while ($u>=-10);

// 2 through 65536 by exponents

$m = 2;

do {
    echo "$m\n";
    $m*=$m;
} while ($m<=1000000);