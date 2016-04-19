<?php
$a = 15;
$b = 2;
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
   return $a / $b;
}

function modulus($a, $b)
{
    return $a % $b;

}

// Add code to test your functions here
echo add(12, 5) . PHP_EOL;
echo subtract(12, 5) . PHP_EOL;
echo multiply(12, 5) . PHP_EOL;
echo divide(12, 6) . PHP_EOL;
echo modulus(12, 4) . PHP_EOL;