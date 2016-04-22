<?php

function parseContacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $firstArray = explode("\n", $contents);
    array_pop($firstArray);
    foreach ($firstArray as $key => $value) {
        $name = explode("|", $value);
        $name["name"] = $name[0];
        unset($name[0]);
        $name["number"] = $name[1];
        unset($name[1]);
        $name['number'] = substr($name['number'],0,3).'-'.substr($name['number'],3,3).'-'.substr($name['number'],6);
        array_push($contacts, $name);
    }
    // todo - read file and parse contacts
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
