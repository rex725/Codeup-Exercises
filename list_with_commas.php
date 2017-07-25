<?php
$physicistString = " Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark";
function humanizedList($physicistString, $sort = false) 
{
	$physicistArray = explode(",", $physicistString);
	if ($sort === true) {
		sort($physicistArray);
	}
	$lastValue = array_pop($physicistArray);
	array_push($physicistArray, "and $lastValue");
	$famousFakePhysicistsString = implode(", ", $physicistArray);
	return $famousFakePhysicistsString;
}
echo "Some of the most famous fictional theoretical physicists are:" . humanizedList($physicistString) . "." . PHP_EOL;

// BONUS EXERCISE 1 for Explode / Implode lesson
// Write a function to remove all the vowels from the following array: 
// [‘a’, ‘b’, ‘c’, ‘d’, ‘e’, ‘f’, ‘g’, ‘h’, ‘i’]
$alphabetArray = ['a','b','c','d','e','f','g','h','i'];
function removeVowels($array) 
{
	$removedVowelsArray = [];
	foreach($array as $letter) {	
		if ($letter != "a" && $letter != "e" && $letter != "i" && $letter != "o" && $letter != "u") {
			array_push($removedVowelsArray, $letter);
		}
	}
	$removedVowelsString = implode(",", $removedVowelsArray);
	return $removedVowelsString;
}
echo removeVowels($alphabetArray) . PHP_EOL;
// BONUS EXERCISE 2
// Write a function to put the following array in alphabetical order: 
// [‘e’, ‘a’, ‘g’, ‘c’, ‘i’, ‘d’, ‘f’, ‘b’, ‘h’]
// Do not use the built-in sort function….
$unalphabetizedArray = ['e', 'a', 'g', 'c', 'i', 'd', 'f', 'b', 'h'];
function alphabetizeArray($array) 
{
	$alphabetizedArray = [];
	foreach($array as $letter) {
		if(array_search('a', $array) !== false){
			array_push($alphabetizedArray, $letter);
		}
	}
	var_dump($alphabetizedArray);
	$alphabetizedString = implode(',', $alphabetizedArray);
	return $alphabetizedString;
}
echo alphabetizeArray($unalphabetizedArray);