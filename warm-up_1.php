<?php
$numbers = array(2,1,-5,"bob");
$arrayEquation = 0;
foreach($numbers as $number) {
	
	if (is_numeric($number) === false) {
		$arrayEquation += 0;
		echo "Not a number.".PHP_EOL;
	} else if ($number < 0){
		$number = abs($number);
		if ($number % 2 != 0) {
		$arrayEquation += $number;
		} else if ($number % 2 === 0) {
		$arrayEquation *= $number;
		}
		echo "Number being evaluated to positive.".PHP_EOL;
	} else if ($number % 2 != 0) {
		$arrayEquation += $number;
		echo "Number is odd and is being added.".PHP_EOL;
	} else if ($number % 2 === 0) {
		$arrayEquation *= $number;
		echo "Number is even and being multiplied.".PHP_EOL;
	}
	echo "$arrayEquation".PHP_EOL;
}