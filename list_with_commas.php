<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($peopleList, $sort = false) {
    if ($sort == true){
        sort($peopleList);
    }
    $lastphysicist = array_pop($peopleList);
    $newString = implode(", ", $peopleList);
    return "Some of the most famous fictional theoretical physicists are" . $newString . " and " . $lastphysicist . "." . PHP_EOL;
}

$physicistsArray = explode(", ", $physicistsString);

echo humanizedList($physicistsArray, true);