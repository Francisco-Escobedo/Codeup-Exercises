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
    return "===================\n";
}

function alternateCombineArrays($arrayOne, $arrayTwo){
    for ($i = 0; $i < count($arrayOne); $i++){
        array_push($arrayTwo, $arrayOne[$i]);
    }
    $unique = array_unique($arrayTwo);
    print_r($unique);
    return "===================\n";
}

function sameIndexCombineArrays($arrayOne, $arrayTwo){
    $empty = []; 
     for ($i = 0; $i < count($arrayOne); $i++){
        $arrayItemOne = $arrayOne[$i];
        $arrayItemTwo =  $arrayTwo[$i];
            if ($arrayItemTwo == $arrayItemOne){
                array_push($empty, $arrayItemOne);
            } else {
                array_push($empty, $arrayItemOne);
                array_push($empty, $arrayItemTwo);
            }
    }
    print_r ($empty);
    return "===================\n";
}


echo combineArrays($names, $compare);

echo alternateCombineArrays($names, $compare);

echo sameIndexCombineArrays($names, $compare);


