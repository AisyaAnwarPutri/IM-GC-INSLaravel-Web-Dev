<?php

require_once './animal.php';

class ape extends animal
{
	public $jump = "jump: Hop Hop";

	public function jump()
	{
		return $this->jump;
	}
}
