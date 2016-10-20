<?php
header('Content-Type: text/plain');

/**
 * Global function
 */
function test()
{
    echo "Test is executed\n";
}

test();

/**
 * Global function with arguments
 */
function test2($a, $b)
{
    return ($a**$b);
}

$c = test2(5, 3);
var_dump($c);


/**
 * PHP 7 example
 *
 * @param array $a
 * @param int $b
 * @return int
 * 
 * @note: mention annotations
 */
function test3(array $a, int $b): int {

}

/**
 * Anonymous function
 */
$test = function() {
    echo "Test is executed\n";
};

$test();

var_dump($test);


/**
 * array_map example
 */
$a = [1, 2, 3];

$b = array_map(function($value) {
    return $value * 2;
}, $a);

var_dump($b);


