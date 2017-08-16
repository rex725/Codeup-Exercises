<?php
class Rectangle
{
	private $height;
	private $width;

	public function __construct($height, $width)
	{
		$this->height = $height;
		$this->width = $width;
	}
	public function getHeight()
	{
		return $this->height;
	}
	public function getWidth()
	{
		return $this->width;
	}
	public function area()
	{
		return $this->height * $this->width;
	}
	public function perimeter()
	{
		return ($this->height * 2) + ($this->width *2);
	}
}