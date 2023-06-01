<?php
class animal
{
	public $name;
	public $legs = "Legs : 4";
	public $cold_blooded = "Cold Blooded : No";

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function get_name()
	{
		return $this->name;
	}

	public function get_legs()
	{
		return $this->legs;
	}

	public function cold_blooded()
	{
		return $this->cold_blooded;
	}
}
