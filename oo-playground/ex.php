<?php


$jeff = new Person('Jeff');

$staff = new Staff;

$laracasts = new Business($staff);

$laracasts->hire($jeff);

$laracasts->hire(new Person('Adekola'));

var_dump($laracasts->getStaffMembers());