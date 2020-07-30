<?php
require_once ('animal.php');

class Ape extends Animal{
	function __construct($name) {
	    $this->name = $name;
	  }
	public function yell(){
		echo "Auooo";
	}
}