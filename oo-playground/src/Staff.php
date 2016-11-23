<?php

namespace Acme;


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