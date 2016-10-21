<!DOCTYPE html>
<html>
    <head>
        <title>Escape example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
   
<?php            
$list = [
    '<a> - anchor',
    '<p> - paragraph',
    '<ul> - unordered list',
    '<table> - table'
];

foreach($list as $value) {
    $explodedValues = explode(' - ', $value);
    echo htmlspecialchars($explodedValues[0]) . "\t" . $explodedValues[1] . "<br/>";
}
?>
 
        </p>
    </body>
</html>
