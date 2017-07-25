<?php

// $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

// $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// //Create a function that returns TRUE or FALSE if an array value is found. Search for Tina and Bob in $names. Make sure it works as expected.
// $result = array_search('Bob', $names);
// var_dump($result) . PHP_EOL;
// //Create a function to compare 2 arrays that returns the number of values in common between the arrays. Use the 2 example arrays and make sure your solution uses array_search().
// function compareArrays($names, $compare) 
// {
// 	$counter = 0;
// 	foreach($names as $name) {
// 		if(array_search($name, $compare) !== false) {
// 			$counter += 1;
// 		}
// 	}
// 	return $counter . PHP_EOL;
// };
// echo compareArrays($names, $compare);
// function combineArrays($names, $compare) {
// 	$mergedArray = [];
// 	for ($i = 0; $i < count($names); $i++) {
// 		if ($names[$i] === $compare[$i]) {
// 			array_push($mergedArray, $names[$i]);
// 		} else {
// 			array_push($mergedArray, $names[$i]);
// 			array_push($mergedArray,$compare[$i]);
// 		}
// 	}

// 	return $mergedArray;
// }
// var_dump(combineArrays($names, $compare));
$names2 = ['Tina', 'Dana', 'Amy', 'Adam'];
$compare2 = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
function compareDifferingArrays($names, $compare) {
	$mergedArray = [];
	for ($i = 0; $i < count($compare); $i++) {
		if(array_search($names[$i], $compare) !== false) {
			array_push($mergedArray, $compare[$i]);
		} else {
			array_push($mergedArray, $names [$i]);
			array_push($mergedArray, $compare[$i]);
		}
	}
	return $mergedArray;
}
var_dump(compareDifferingArrays($names2, $compare2));
// $names2 = ['Tina', 'Dana', 'Amy', 'Adam'];
// $compare2 = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
// function compareDifferingArrays($names, $compare) {
// 	$mergedArray = [];
// 	for ($i = 0; $i < count($compare); $i++) {
// 		if(array_search($compare[$i], $names) !== false) {
// 			array_push($mergedArray, $names[$i]);
// 		} else if (array_search($compare[$i], $names) === false) {
// 			array_push($mergedArray, $names [$i]);
// 			array_push($mergedArray, $compare[$i]);
// 		} else if (!array_key_exists($i, $compare)
// 	}
// 	// foreach($mergedArray as $name) {
// 	// 	if(array_search(null, $mergedArray) !== false) {
// 	// 		unset($name);
// 	// 	}
// 	// }
// 	return $mergedArray;
// }