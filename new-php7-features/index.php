<?php

require 'vendor/autoload.php';


// before PHP7 : could not import everything in the same namespace at once

use App\Person;

use App\Animal;


// with PHP7 : 

use App\{Person, Animal};

var_dump(new Person);
var_dump(new Animal);