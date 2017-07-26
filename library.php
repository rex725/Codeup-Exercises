<?php
//Write a function called isEven that takes in a variable and returns true or false if the provided input is evenly
//divisible by two or not.
function isEven($number) 
{
	if(is_numeric($number)) {
		return $number % 2 === 0;
	} else {
		return false;
	}
}
//Write a function called isVowel that returns true or false if the provided input is the letter 'a', 'e', 'i', 'o', or 'u'
function isVowel($letter) 
{
	if(!is_string($letter) && count($letter) !== 1) {
		return flase;
	}
	$letter = strtolower($letter);
	if ($letter === "a" || $letter === "e" || $letter === "i" || $letter === "o" || $letter === "u") {
		return true;
	} else {
		return false;
	}
}
// Write a function called "first" that takes in an argument that could be an array or a string. Return the first character if the argument is a string. Return the first element of the array if the input is an array.
function first($var)
{
	if(is_string($var)){
		return substr($var, 0, 1);
	} else if(is_array($var)) {
		return $var[0];
	}
}
// Write a function called "second" that takes in input that could be an array or a string. The function should return the second character or element of the input.
function second($var)
{
	if(is_string($var)){
		return substr($var, 1, 1);
	} else if(is_array($var)) {
		return $var[1];
	}
}
// Write a function called "last" that takes in an input that could be an array or a string. Your function should return the last character or element of the input.
function last($var) 
{
	if(is_string($var)){
		return substr($var, (strlen($var) - 1), 1);
	} else if(is_array($var)) {
		return $var[(count($var) - 1)];
	}	
}
// Write a function called "reverse" that takes in an input of either a string or an array. Your function should return the elements or characters in reverse order.
function reverse($var)
{
	if(is_string($var)){
		return strrev($var);
	} else if(is_array($var)) {
		return array_reverse($var);
	}	
}
// Write a function called "random" that takes in an input that can be either a string or an array. Your function should return a random element or character from the input.
function random($var)
{
	if(is_string($var)){
		$randomNumber = rand(0, strlen($var));
		return substr($var, $randomNumber, 1);
	} else if(is_array($var)) {
		return $var[array_rand($var)];
	}	
}

