<?php

class Person{
	public $fullname = false;
	public $givename = false;
	public $familyname = false;
	public $room = false;

	public function __construct($fullname = false,$givename = false,$familyname = false,$room = false)
	{
		$this->fullname = $fullname;
		$this->givename = $givename;
		$this->familyname = $familyname;
		$this->room = $room;
	}

	public function get_name()
	{
		if($this->fullname !== false ) return $this->fullname;
		if($this->givename !== false && $this->familyname !== false ){
			return $this->givename .' '. $this->familyname;
		}
		return false;
	}

}

$chuck = new Person("Chuck Severnes",);
$collean = new Person(false,"van Lent","Collena");

print $chuck->get_name() ."\n";
print $collean->get_name()."\n";