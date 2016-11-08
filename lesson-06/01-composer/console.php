<?php

include __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Formatter\OutputFormatter;
use Symfony\Component\Console\Helper\Table;

$output = new ConsoleOutput();
$output->setFormatter(new OutputFormatter(true));


$table = new Table($output);
$table
    ->setHeaders(array('ID', 'Name', 'Email'))
    ->setRows(getAttendeeData());

$table->render();

$output->writeln('');
$output->writeln('This <bg=green;fg=white;option=blink>PHP Academy</> is <comment>sweet</comment>!');
$output->writeln('');








function getAttendeeData()
{
    $dsn = 'mysql:host=localhost;dbname=php-academy;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
        exit;
    }

    $stmt = $conn->query('SELECT id, name, email FROM `attendee`');

    return $stmt->fetchAll(PDO::FETCH_NUM);
}