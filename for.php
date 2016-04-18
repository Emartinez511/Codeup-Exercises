<?php

fwrite(STDOUT, "Choose a starting number!\n");
$min = trim(fgets(STDIN));

fwrite(STDOUT, "Choose a ending number!\n");
$max = trim(fgets(STDIN));

fwrite(STDOUT, "Choose an increment to count by!\n");
$incr = trim(fgets(STDIN));

if ($min * $max != 0) {
    if ($incr != Null){
        for ($a = $min; $a <= $max; $a+=$incr) {
            echo "$a\n";
        }  
    } else {
        for ($a = $min; $a <= $max; $a++) {
            echo "$a\n";
        }
    } 
} else {
    die("error: Enter only numbers\n");
}