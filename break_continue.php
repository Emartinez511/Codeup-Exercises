<?php

for ($i=1; $i <= 100 ; $i++) { 
    if ($i % 2 == 0){
        echo "$i is even\n";
        continue;
    }
    echo "$i\n";
}

for ($i=1; $i < 100 ; $i++) { 
    if ($i == 10){
        echo "$i\n";
        break;
    }
    echo "$i\n";
}