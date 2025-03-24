<?php

$x = "Hello World!";
echo substr($x, 6, 5);


echo substr($x, 6);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
$x = "59.85";
var_dump(is_numeric($x));

$x = 1.9e411;
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
echo $x;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>