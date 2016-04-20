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

echo "Search for names:\n";
var_dump(search('Tina', $names));
echo "\n";

var_dump(search('Bob', $names));
echo "=====================\n";

echo compare($names, $compare);
echo "\n";
