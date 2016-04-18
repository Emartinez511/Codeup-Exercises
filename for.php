<?php

fwrite(STDOUT, "Choose a starting number and ending number!\n");

$min = $argv[1];
$max = $argv[2];

for ($a = $min; $a <= $max; $a++) {
    echo "\$a has a value of {$a}\n";
}