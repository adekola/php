<?php 

$database = require 'bootstrap.php';

$routes = [
	'' => 'controllers/index.php',

	'about' => 'controllers/about.php',

	'about/culture' => 'controllers/about-culture.php',

	'contact' => 'controllers/contact.php',
]