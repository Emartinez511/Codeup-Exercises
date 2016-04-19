<?php

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function subtract($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function multiply($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function divide($a, $b){
    if ($b == 0) {
        return "ERROR please don't divide by 0, The fabric of space time may be distrupted.";
    } elseif (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function modulus($a, $b){
    if (is_numeric($a) && is_numeric($b)) {
        return $a % $b;
    } else {
        return throwErrorMessage($a, $b);
    }
}

function throwErrorMessage($a, $b){
    return "ERROR one of these is not a number ($a  $b)\n";
}

echo add(12, 5) . PHP_EOL;
echo subtract(12, 5) . PHP_EOL;
echo multiply(12, 5) . PHP_EOL;
echo divide(2, 0) . PHP_EOL;
echo modulus(12, 4) . PHP_EOL;