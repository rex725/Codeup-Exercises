<?php
// create a function
//split string into seperate parts
//counter to recieve amount of each character
//I need a way to initialize a portion of the string and count each similar portion
function alphaNumericCounter ($var) {
	$stringToAnArray = str_split($var);
	$charactersToCompare = str_split($var);
	$counter = 0;
	foreach ($stringToAnArray as $character) {
		for ($i = 0; $i < count($stringToAnArray); $i++) {
			if ($character === $charactersToCompare[$i]) {
				unset($stringToAnArray[$character]);
			}
		}
	}
	foreach ($stringToAnArray as $character) {
		for ($i = 0; $i < count($stringToAnArray); $i++) {
			if ($character === $charactersToCompare[$i]) {
				$counter += 1;
				return $counter;
			}
		}
	}
	
}
echo alphaNumericCounter('aabb131');