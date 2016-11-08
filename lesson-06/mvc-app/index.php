<?php

//define base path, root path of our application
define('BP', __DIR__ . '/');

//enable error_reporting to see php errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

//set include path, this is where included classes will be found
set_include_path(implode(PATH_SEPARATOR, array(
    BP.'app/model',
    BP.'app/controller',
)));

//use Composers autoloader
require BP . 'vendor/autoload.php';

//start app
App::start();

