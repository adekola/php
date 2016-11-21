<?php 

$task = [

	'title' => 'Buy Proposal Ring',
	'due' => 'Next Month',
	'assigned_to' => 'Me',
	'completed' => 'No'
];


echo '<pre>';
var_dump($task);
echo '</pre>';

require 'index.view.php';
