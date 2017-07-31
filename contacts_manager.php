<?php
function accessFile($filename) {
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
    fclose($handle);
    runMenuOptions($filename, $contacts);
    
}
// function parseContacts($filename, $content)
// {
	
    
//     return $contacts;
// } 
function runMenuOptions($filename, $contacts)
{
	$a = 1;
	while($a < 5) {
		fwrite(STDOUT, "1 = View Contacts\n2 = Add a New Contact\n3 = Search a Contact By Name\n4 = Delete an Existing Contact	\n5 = Exit\n");
		$input = trim(fgets(STDIN));
		if($input === "1") {
			$handle = fopen($filename, 'r');
    		$content = trim(fread($handle, filesize($filename)));
    		foreach($contacts as $contact => $value) {
    			if(strlen($value["number"]) <= 7) {
    				$prefix = substr($value["number"],0,3);
    				$suffix = substr($value["number"],3,4);
    				$numberWithDashes = "$prefix-$suffix";
    			} else {
    				$areaCode = substr($value["number"],0,3);
    				$prefix = substr($value["number"],3,3);
    				$suffix = substr($value["number"],6,4);
    				$numberWithDashes = "$areaCode-$prefix-$suffix";	
    			}
    			echo $value['name'] .  '|' . $numberWithDashes . PHP_EOL;
    		}
    		fclose($handle);
		}
		if($input === "2") {
			fwrite(STDOUT, "Please enter a name and number.\n Ex. Joe Shmoe|1234567890" . PHP_EOL);
			$newContact = trim(fgets(STDIN));
			$handle = fopen($filename, 'a');
			fwrite($handle, PHP_EOL . $newContact);
			fclose($handle);
		}
		if($input === "3") {
			fwrite(STDOUT, "What name would you like to search for?");
			$name = trim(fgets(STDIN));
			foreach($contacts as $contact) {
				if(array_search($name, $contact) !== false){
					echo implode("|", $contact) . PHP_EOL;
				}
			}
		}
		if($input === "4") {
			fwrite(STDOUT, "What name would you like to delete?");
			$name = trim(fgets(STDIN));
			// foreach($contacts as $contact => $value) {
			// 	$number = explode("-",$value["number"]);
			// }
			// foreach($number as $character) {
			// 	if(array_search("-", $number)) {
			// 		unset($character);
			// 	}
			// }
			// implode("", $number);
			// echo $number;
			$contactFound = false;
			foreach($contacts as $key => $contact) {
				if(array_search($name, $contact) !== false){
					unset($contacts[$key]);
					$contactFound = true;
				}
			}
			if ($contactFound === false) {
				echo "$name is not on your contact list." . PHP_EOL;
			} else {
				echo "$name has been deleted." . PHP_EOL;
			}
			$handle = fopen($filename, 'w');
			foreach($contacts as $contact) {
				$contact = implode("|", $contact);
				fwrite($handle, PHP_EOL . $contact);
			};
			fclose($handle);
			
		}
		if($input === "5") {
			echo "Goodbye" . PHP_EOL;
			break;
		}
	}
}

accessFile('contacts.txt');