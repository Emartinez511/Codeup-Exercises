<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $data) {
//     if (is_float($data)) {
//         echo "float\n";
//     } else if (is_bool($data)) {
//         echo "boolean\n";
//     } else if (is_array($data)) {
//         echo "array\n";
//     } else if (is_string($data)) {
//         echo "string\n";
//     } else if (is_int($data)) {
//         echo "integer\n";
//     }
// }

// foreach ($things as $data) {
//    if (is_scalar($data)) {
//         echo "$data\n";
//    }
// }

foreach ($things as $data) {
    echo "$data\n";
}