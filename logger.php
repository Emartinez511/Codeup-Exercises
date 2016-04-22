<?php

function logMessage($logLevel, $message)
{
    $todayFile = date("Y-m-d");
    $today = date("Y-m-d H:i:s");
    $filename = "log-$todayFile.log";
    $handle = fopen($filename, 'a');
    fwrite($handle, "$today [$logLevel] $message" . PHP_EOL);
    fclose($handle);
}


function logInfo(){
    logMessage("INFO", "This is an info Message." );
}

function logError() {
    logMessage("ERROR", "This is an error message.");
}


logInfo();
logError();




