<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'The Lord of the Rings' => array(
    	'published' => 1968,
    	'author' => 'J. R. R. Tolkien',
    	'pages' => 1178
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

fwrite(STDOUT, 'BOOKS WITH LESS THAN 300 PAGES'.PHP_EOL);
foreach($books as $key => $value) {
	if ($books[$key]['pages'] < 300) {
		echo "$key".PHP_EOL.PHP_EOL;
		foreach($value as $key => $value) {
			echo " {$key}: {$value}".PHP_EOL;
		}
	}
}

fwrite(STDOUT, 'BOOKS AVERAGE PAGE LENGTH AND YEAR OF PUBLICATION'.PHP_EOL);
$averageLength = 0;
$averagePublishingDate = 0;
foreach($books as $key => $value) {
	$averageLength += $books[$key]['pages'];
	$averagePublishingDate += $books[$key]['published'];
}
echo $averageLength/count($books).PHP_EOL;
echo $averagePublishingDate/count($books).PHP_EOL;

fwrite(STDOUT, 'NO DUPLICATE BOOKS'.PHP_EOL);

$authors = [];
foreach($books as $key => $value) {
	array_push($authors, $books[$key]['author']);

	for ($i = 0; $i < count($authors); $i++) {
		if ($i >= 1) {
			if ($books[$key]['author'] == $authors[$i - 1]) {
				unset($books[$key]);
			}
		}		
	}
}
foreach ($books as $key => $value) {
	echo "$key".PHP_EOL.PHP_EOL;
	foreach($value as $key => $value) {
		echo " {$key}: {$value}".PHP_EOL;
	}
}