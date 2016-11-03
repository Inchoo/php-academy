<?php
header('Content-Type: text/plain');

$dsn = 'mysql:host=localhost;dbname=academy;charset=utf8';
$username = 'academy';
$password = 'academy';

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

$id = $_GET['id']; // user input - laze
$sql = 'SELECT * FROM `attendee` WHERE id = ?';

//get 'prepared statement' from 'connection'
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

foreach ($stmt as $row) {
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";
}



//$id = 1;
//$sql = 'SELECT * FROM `attendee` WHERE id = :id';
//
////get 'prepared statement' from 'connection'
//$stmt = $conn->prepare($sql);
//$stmt->execute([
//    'id' => $id, // $_GET['id']
////    'ime' => 'nesto'
//]);
//
//foreach ($stmt as $row) {
//    print $row['id'] . "\t";
//    print $row['name'] . "\t";
//    print $row['email'] . "\n";
//}