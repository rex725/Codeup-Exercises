<?php
$number = 2;
do {
	echo "$number\n";
	$number *= $number;
} while ($number <= 1000000);