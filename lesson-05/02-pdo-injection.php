<?php
header('Content-Type: text/plain');

if(!isset($_GET['id'])) {
    echo 'Add ?id=1 or similar $_GET[id] to this url :)';
    exit;
}

$dsn = 'mysql:host=localhost;dbname=academy;charset=utf8';
$username = 'academy';
$password = 'academy';

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Lets use SELECT FROM NOW
$sql = 'SELECT * FROM `attendee` WHERE id = ' . $_GET['id'];
echo 'SQL: ' . $sql . PHP_EOL . PHP_EOL;

$stmt = $conn->query($sql);

echo 'Result: ';
print_r($stmt->fetchAll());

// What happens with delete statement?
// $sql = 'DELETE FROM `attendee` WHERE id = ' . $_GET['id'];


//but what if we add this to our url: ?id=1 or TRUE
//we (or someone) just deleted whole database


/*
Above code should be replaced with this to avoid sql injections

$sql = 'DELETE FROM `attendee` WHERE id = ?';
$stmt = $conn->prepare($sql);
$stmt->execute([$_GET['id']]);
*/


// id=1%20OR%201=1