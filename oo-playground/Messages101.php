<?php

class Person{

	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}
}

/**
* 
*/
class Business 
{

	protected $staff;

	public function __construct(Staff $staff)
	{
		$this->staff = $staff;
	}

	public function hire(Person $person)
	{
		$this->staff->add($person);
	}

	public function getStaffMembers()
	{
		return $this->staff->getMembers();
	}
}

class Staff{

	protected $members = [];
	
	public function __construct($members = [])
	{
		$this->members = $members;
	}

	public function add($person)
	{
		$this->members[] = $person;
	}

	public function getMembers()
	{
		return $this->members;
	}
}

$jeff = new Person('Jeff');

$staff = new Staff;

$laracasts = new Business($staff);

$laracasts->hire($jeff);

$laracasts->hire(new Person('Adekola'));

var_dump($laracasts->getStaffMembers());