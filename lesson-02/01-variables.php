<?php
header('Content-Type: text/plain');


// This is line comment
# This is line comment also

/*
 This is block comment,
 when comment goes in more lines
*/



/*
 * Variable
 * variable naming is similar to other languages
 */
$v = 42;

echo $v;
var_dump($v);


/**
 * @note: show comments
 */

/*
 * Integer, float ..
 */
$n = 1;
$f = 2.55;

var_dump($f);

/**
 * Boolean
 */
$b = false;

/**
 * String
 * @note: single quotes vs double quotes; escape special chars inside strings; \n
 */
$s = 'PHP Akademija $n';
echo $s;

$s = "PHP Akademija $n";

var_dump($s);


/**
 * Array
 */

$a1 = [1, 2, 3];            // new array syntax
//$a1 = array(1, 2, 3);     //old array syntax
var_dump($a1);

echo $a1[2];

$a1[3] = 4;
$a1[] = 5;
$a1[] = 6;


$a2 = [1, 'two', false];        
var_dump($a2);

$a3 = [
    'key_1' => 1,
    'key_2' => 'two',
    'key_3' => [1, 2, 3]
];

var_dump($a2);

//array access
var_dump($a2['key_2']);

//$a2['key_3'] =

/**
 * Object
 */

//stdClass is PHP's generic empty class, kind of like Object in Java or object in Python
$o = new StdClass();
$o->x = 'Just a property';

var_dump($o);

