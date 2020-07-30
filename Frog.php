<?php
require_once ('animal.php');

class Frog extends Animal{
	function __construct($name) {
	    $this->name = $name;
	  }
	public function jump(){
		echo "hop hop";
	}
}