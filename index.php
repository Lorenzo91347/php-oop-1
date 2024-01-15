<?php

require_once __DIR__.'/class.php';

$movie1 = new Movie('movie1','1991','action','130','4');
$movie2 = new Movie('movie2','1998','adventure','95','2');
$movie3 = new Movie('movie3','2014','romance','160','5');

var_dump($movie1);
var_dump($movie2);
var_dump($movie3);


