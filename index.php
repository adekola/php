<?php 

$database = require 'bootstrap.php';

$tasks = $database->selectAll('todos');

require 'index.view.php';
