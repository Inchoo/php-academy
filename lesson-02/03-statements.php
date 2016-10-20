<?php
header('Content-Type: text/plain');

/**
 * @note: mention loose typed logic; mention camel case
 */

$isTrue = true;
//$isTrue = ':]';

if($isTrue) {
    echo "It's true\n";
}

$isFalse = '';

if($isFalse) {
    echo 'It\'s false\n';
}


if($isTrue || $isFalse) {
    echo "It's true or false\n";
}


////////

var_dump(123 == "123abc");
var_dump((1 == 1.0) == (true == 'false'));

var_dump(1 === '1');

/////////


$a = 5;
$b = 6;

if ($a > $b) {
    echo "a is bigger than b \n";
} elseif ($a == $b) {
    echo "a is equal to b \n";
} else {
    echo "a is smaller than b \n";
}



$result = $isTrue ? 'one' : 'two';
var_dump($result);

$result = $isTrue ?: false;
var_dump($result);

// PHP 7 - Example usage for: Null Coalesce Operator
//$action = $_POST['action'] ?? 'default';



$day = 2;

switch($day) {
    case 1:
        echo 'Ponedjeljak';
        break;
    case 2:
        echo 'Utorak';
        break;
    case 3:
    case 4:
    default:
        echo 'Nije ni ponedjeljak ni utorak';

}


// is_array(), is_number(), is_null(), is_int() 

if($lol == 3) {
    
}

// isset(), empty()
