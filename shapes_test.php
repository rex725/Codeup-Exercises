<?php
require_once "Rectangle.php";
require_once "Square.php";

$shape = new Square(4,4);

echo $shape->perimeter() . PHP_EOL;

// echo $shape->height . PHP_EOL;
// echo $shape->width . PHP_EOL;
// echo Rectangle::area($shape->height, $shape->width) . PHP_EOL;
// echo Square::perimeter($shape->height, $shape->width) . PHP_EOL;