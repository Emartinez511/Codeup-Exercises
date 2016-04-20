<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mike', 'Amy', 'Michael'];



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

var_dump(results('Tina', $names));
var_dump(results('Bob', $names));
echo compArray($names, $compare) . PHP_EOL;