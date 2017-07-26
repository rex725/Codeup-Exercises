<?php

function parseContacts($filename)
{
    $handle = fopen($filename, 'r');
    $content = trim(fread($handle, filesize($filename)));
    $contacts = explode("\n", $content);
    foreach($contacts as $contact) {
    	array_push($contacts, explode("|", $contact));
    	array_shift($contacts);
    }
    array_walk($contacts, function(& $contact) {
    	$contact["name"] = $contact[0];
    	$contact["number"] = $contact[1];
    	unset($contact[0]);
    	unset($contact[1]);
    });
    foreach($contacts as $contact => $value) {
    	$areaCode = substr($value["number"],0,3);
    	$prefix = substr($value["number"],3,3);
    	$suffix = substr($value["number"],6,4);
    	$contacts[$contact]["number"] = "$areaCode-$prefix-$suffix";  	
    }

    // todo - read file and parse contacts
    fclose($handle);
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));
