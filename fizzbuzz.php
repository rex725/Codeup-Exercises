<?php
for ($i = 1; $i <= 100; $i++) {
	if ($i % 3 === 0 && $i % 5 === 0) {
		$message = "fizzbuzz\n";
	} else if ($i % 5 === 0) {
		$message = "buzz\n";
	} else if ($i % 3 === 0) {
		$message = "fizz\n";
	} else {
		$message = $i;
	}
	fwrite(STDOUT, "$message\n");
}