<?php

$games = ['Mass Effect', 'Super Mario Bros', 'Zelda', 'Fallout', 'Metal Gear'];

sort($games);

usort($games, function($a, $b)
{
	var_dump('a: '.$a.', b: '.$b);
	return $b <=> $a; // -1, 0, 1
});

var_dump($games);
