<?php 

$tasks = $database->selectAll('todos');

require 'views/index.view.php';