<?php 

require 'bootstrap.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
