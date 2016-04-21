<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', ];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combine_arrays($firstArray, $secondArray){
    foreach ($secondArray as $name) {
        if (results($name, $firstArray)) {

        } else{
            array_push($firstArray, $name);
        }
    }
    print_r($firstArray);
}

function results($search, $name) {
    $searchName = array_search($search, $name);
    if ($searchName !== false) {
        return true;
    } else {
        return false;
    }

}

function compArray($array1, $array2) {
    $count = 0;
    foreach ($array1 as $name){
        if (results($name, $array2)) {
            $count++;
        }
    }
    return $count;
}
echo combine_arrays($names, $compare) . PHP_EOL;
// var_dump(results('Tina', $names));
// var_dump(results('Bob', $names));
// echo compArray($names, $compare) . PHP_EOL;