<?php
class Test_lib {

	const MAN = 1;
	const WOMAN = 2;

	private $name;
	private $price;
	public function  __construct(){
	}

	public static function addition($int1, $int2)
	{
		return $int2 + $int2;
	}
	public function getPrice()
	{
		return $this->price;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}
}