<?php
header('Content-Type: text/plain');

$list = [
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unordered list',
    '<table> - table'
];

foreach($list as $value) {
    $explodedValues = explode(' - ', $value);
    echo $explodedValues[0] . "\t" . $explodedValues[1] . "\n";
}

