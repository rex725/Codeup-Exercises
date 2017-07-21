<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);
echo $books['The Hobbit']['published'];
foreach($books as $key => $value) {
	echo "$key".PHP_EOL.PHP_EOL;
	foreach($value as $key => $value) {
		echo " {$key}: {$value}".PHP_EOL;
	}
}

fwrite(STDOUT, 'BOOKS WRITTEN AFTER 1950'.PHP_EOL);
foreach($books as $key => $value) {
	if ($books[$key]['published'] >= 1950) {
		echo "$key".PHP_EOL.PHP_EOL;
		foreach($value as $key => $value) {
			echo " {$key}: {$value}".PHP_EOL;
		}
	}
}