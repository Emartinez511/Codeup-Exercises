<?php

fwrite(STDOUT, "Choose a starting number!\n");
$min = intval(fgets(STDIN));
fwrite(STDOUT, "Choose a ending number!\n");
$max = intval(fgets(STDIN));
$incr = intval(fgets(STDIN));
for ($a = $min; $a <= $max; $a+=$incr) {
    echo "$a\n";
}