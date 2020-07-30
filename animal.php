<?php
class Animal {
  // Properties
  public $legs = 2;
  public $cold_blooded = false;

  function __construct($name) {
    $this->name = $name;
  }

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>