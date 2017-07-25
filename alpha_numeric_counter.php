<?php
// create a function
//split string into seperate parts
//counter to recieve amount of each character
//I need a way to initialize a portion of the string and count each similar portion
function alphaNumericCounter ($var) {
	$stringToAnArray = str_split("ab13");
	$charactersToCompare = str_split($var);
	$counter = 0;
	foreach($stringToAnArray as $character) {
		if(array_search($character, $charactersToCompare) !== false){
			$counter += 1;	
		}
		echo "There are " . $counter . " " . $character ."'s.". PHP_EOL;
	}	
}
echo alphaNumericCounter('aabb131');