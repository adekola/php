<?php

class Task{

	public $description;

	public $title;

	public $completed = false;

	public function __construct($title, $description)
	{
		$this->description = $description;

		$this->title = $title;
	}

	public function complete()
	{
		$this->complete = true;
	}
}

$task = new Task('Now', 'Go to wherever');

$task->complete();

var_dump($task);