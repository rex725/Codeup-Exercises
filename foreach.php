<?php
$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
foreach($things as $thing) {
	if (is_int($thing)) {
		fwrite(STDOUT, "{$thing} is an integer.\n");
	} else if (is_float($thing)) {
		fwrite(STDOUT, "{$thing} is a float.\n");
	} else if (is_bool($thing)) {
		fwrite(STDOUT, "{$thing} is a boolean.\n");
	} else if (is_array($thing)) {
		fwrite(STDOUT, "{$thing} is an array.\n");
	} else if (is_null($thing)) {
		fwrite(STDOUT, "{$thing} is a null value.\n");
	} else if (is_string($thing)) {
		fwrite(STDOUT, "{$thing} is a string.\n");
	}
}

foreach($things as $thing) {
	if (is_scalar($thing)) {
		fwrite(STDOUT, "{$thing} is scalar.\n");
	}
}

foreach ($things as $thing) {
	echo "$thing\n";
	if (is_array($thing)) {
		$array = $thing;
		foreach ($array as $elements) {
			echo " $elements\n";
		}
	}
}