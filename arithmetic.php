<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR please enter a number";
    }
}
function subtract($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR please enter a number";
    }
}

function multiply($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR please enter a number";
    }
}

function divide($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        return "ERROR please enter a number";
    }
}

function modulus($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return "ERROR please enter a number";
    }
}

// Add code to test your functions here
echo add(12, 5) . PHP_EOL;
echo subtract(12, 5) . PHP_EOL;
echo multiply(12, 5) . PHP_EOL;
echo divide(12, 6) . PHP_EOL;
echo modulus(12, 4) . PHP_EOL;