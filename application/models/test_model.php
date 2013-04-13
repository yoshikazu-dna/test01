<?php
class Test_model extends CI_Model {

	private $name;

	public function  __construct() {
		parent:: __construct();
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		if(false == $this->checkNum($name))
		{
			throw new Exception('価格の設定値が不正です'.$name);
		}
		$this->name = $name;
	}

	private function checkNum($num)
	{
		if (false == is_numeric($num))
		{
			return false;
		}
		return true;
	}
}