<?php
require_once "Rectangle.php";
require_once "Square.php";

$square = new Square(4);
$rectangle = new Rectangle(6,7);

echo $square->area() . PHP_EOL;
echo $square->perimeter() . PHP_EOL;
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;

// echo $shape->height . PHP_EOL;
// echo $shape->width . PHP_EOL;
// echo Rectangle::area($shape->height, $shape->width) . PHP_EOL;
// echo Square::perimeter($shape->height, $shape->width) . PHP_EOL;