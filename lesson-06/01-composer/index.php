<?php

include __DIR__ . '/vendor/autoload.php';

// all set !!

// create a log channel
$logger = new \Monolog\Logger('default');
$handler = new \Monolog\Handler\StreamHandler('log/default.log', \Monolog\Logger::ERROR);

/*
$handler = new \Monolog\Handler\PushoverHandler(
    'api key',
    'user key',
    null,
    \Monolog\Logger::INFO
);
*/

$logger->pushHandler($handler);

// add records to the log
$logger->error('This is some error message.');

