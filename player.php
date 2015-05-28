<?php
class Player {
	private $name;
	private $manna;
	private $blood;

	function __construct($name){
		$this->name = $name;
		$this->manna = 40;
		$this->blood = 100;
	}
	function set_name($name) {
      	$this->name = $name;
    }

    function get_name() {
      	return $this->name;
    }

    function set_blood($blood) {
      	$this->blood = $blood;
    }

    function get_blood() {
      	return $this->blood;
    }
    
    function set_manna($manna) {
      	$this->manna = $manna;
    }

    function get_manna() {
      	return $this->manna;
    }
}
?>