<?php

for ($i=0; $i<=100; $i++){
    if ($i%2 == 0){
        echo "$i\n";
        if ($i == 100){
            echo "==================\n";
        }
        continue;
    }
}

for ($i=0; $i<=100; $i++){
    echo "$i\n";
    if ($i == 10){
        echo "+++++++++++++++++++\n";
        break;
    }
}