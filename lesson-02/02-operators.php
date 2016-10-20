<?php
header('Content-Type: text/plain');

$n = 1;
$f = 2.55;

var_dump($n + $f);

$b = true;

var_dump($n + $f + $b);

$n += 10;
$n *= 10;

$n++;
$n--;

$s = 'PHP Akademija';
$s = $s . ' u Osijeku';

var_dump($s);

$a1 = [1, 'two', false];

$a2 = [
    'key_1' => 1,
    'key_2' => 'two',
    'key_3' => [

    ]
];

var_dump($a1 + $a2);
//array_merge($a1, $a2);
//array_replace($a1, $a2);
