<?php 

class Task{

	public $description;

	public $completed = false;

	public function __construct($description)
	{
		$this->description = $description;
	}

	public function isComplete(){
		return $this->completed;
	}

	public function complete(){
		$this->completed = true;
	}
}


$tasks = [
	new Task('Complete this'),
	new Task('And that'),
	new Task('Dont ever stop')
];

$task = new Task('Go to store');
$task->complete();
//var_dump($task->isComplete());


require 'index.view.php';
