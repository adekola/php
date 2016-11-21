<?php 


$person = [
	'age' => 25 ,
	'hair' => 'Black',
	'career' => 'Products Guy'
];


$person['name'] =  'Adekola';

unset($person['age']);
echo '<pre>';
//die(var_dump($person)); // dumps the value for any and everything; die() makes the execution end on this very line
var_dump($person);
echo '</pre>';

require 'index.view.php';
