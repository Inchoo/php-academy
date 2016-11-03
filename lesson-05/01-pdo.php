<?php
header('Content-Type: text/plain');

/**
 * @notes:
 *  - mysql_ is deprecated; use PDO, mysqli_
 *  - explain try/catch
 */

$dsn = 'mysql:host=localhost;dbname=academy;charset=utf8';
$username = 'academy';  // root
$password = 'academy';  //

try {
    $conn = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

$sql = 'SELECT * FROM `attendee`';

// get 'statement' from 'connection'
$stmt = $conn->query($sql);

//// ->fetch() gets you next row, one by one
while ($row = $stmt->fetch()) {
    print $row['id'] . "\t";
    print $row['name'] . "\t";
    print $row['email'] . "\n";
}

// ->fetchAll() fetches all rows as array at once
//foreach ($stmt->fetchAll() as $row) {
//    print $row['id'] . "\t";
//    print $row['name'] . "\t";
//    print $row['email'] . "\n";
//}

// also possible
//foreach ($stmt as $row) {
//    print $row['id'] . "\t";
//    print $row['name'] . "\t";
//    print $row['email'] . "\n";
//}

// Which one consumes less memory?
