<?php 

$task = [

	'title' => 'Buy Proposal Ring',
	'due' => 'Next Month',
	'assigned_to' => 'Me',
	'completed' => false
];


echo '<pre>';
var_dump($task);
echo '</pre>';

require 'index.view.php';



/*
<?php foreach ($task as $heading => $value) : ?> 
	<li> 
		<strong> <?= ucwords($heading) ?> </strong>  <?= $value; ?>
	</li>
<?php endforeach; ?> -->
*/