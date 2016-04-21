<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function search($query, $array) {
    $searchResult = array_search($query, $array);  
    if ($searchResult !== false) {
        return ((bool) 1);
    } else {
        return ((bool) 0);
    }
}

function compare($arrayOne, $arrayTwo){
    $count = 0;
    foreach($arrayOne as $name){
        if (search($name ,$arrayTwo)){
            $count +=1;
        }
    }
    return $count;
}

function combineArrays($arrayOne, $arrayTwo){
    foreach($arrayOne as $name){
        if (search($name, $arrayTwo)){
        } else {
            array_push($arrayTwo, $name);
        }
    }
    print_r($arrayTwo);
}

function alternateCombineArrays($arrayOne, $arrayTwo){
    for ($i = 0; $i < count($arrayOne); $i++){
        array_push($arrayTwo, $arrayOne[$i]);
    }
    $unique = array_unique($arrayTwo);
    print_r($unique);
}

// echo combineArrays($names, $compare);

echo alternateCombineArrays($names, $compare);