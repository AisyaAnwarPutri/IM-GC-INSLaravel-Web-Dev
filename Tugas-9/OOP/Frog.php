<?php

require_once './animal.php';

class frog extends animal
{
    public $yell = " Yell : Auooo";
	public $legs = "Legs: 2" ;

	public function yell() {
		return $this->yell;
	}
}
