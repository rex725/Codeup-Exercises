<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
//Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
$result = array_search('Bob', $names);
var_dump($result) . PHP_EOL;
//Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
function compareArrays ($names, $compare) 
{
	$counter = 0;
	foreach($names as $name) {
		if(array_search($name, $compare) !== false) {
			$counter += 1;
		}
	}
	return $counter . PHP_EOL;
};
echo compareArrays($names, $compare);