<?php

class Person{

	public $name;

	public $age;

	public function __construct($value='')
	{
		# code...
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		if($age > 18){

			throw new Exception("Person is not old enough");
			
		}

		$this->age =  $age;

	}
}