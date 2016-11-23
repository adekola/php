<?php

$_GET['name'] = 'Joe';


$name = $_GET['name'] ?? 'nothing'; // replaces the ternary operatore you already know.


var_dump($name);