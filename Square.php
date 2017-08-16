<?php
require_once "Rectangle.php";
class Square extends Rectangle
{
	public function __construct($height)
	{
		return parent::__construct($height, $height);
	}
	public function setHeight($height)
	{
		return $this->height = $height;
	}
	public function setWidth($width)
	{
		return $this->width = $width;
	}
	
	public function perimeter()
	{
		return $this->getHeight() * 4;
	}
	public function area()
	{
		return $this->getHeight() * 2;
	}
}