<?php

function is_palindrome($word){
    $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$word));
    if ($a == strrev($a)){
        return true;
    } else {
        return false;
    }
}

var_dump(is_palindrome("No 'x' in 'Nixon"));