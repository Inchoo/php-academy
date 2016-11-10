<?php

$a = 1;
$b = 2;

$c = sum($a, $b);

var_dump($c);



function sum($a, $b)
{
    return $a + $b;
}