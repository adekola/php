<?php 

declare(strict_types=1); // to ensure a strict enforcing of types in methods

// type hinting for scalar types

function setAge(int $age)
{
	var_dump($age);

}

function setIsValid(bool $valid)
{
	var_dump($valid);
}


class User{}

function getUser() : User//type hinting of return values
{
	return new User;
}


interface SomeInterface {

	public function getUser() : User; // return value type hinting used in interfaces
	
}

class SomeClass implements SomeInterface {

	public function getUser() : User
	{
		return new User;
	}

}
//setAge('30');

//setIsValid(1);

getUser();