<?php

require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


// create a log channel
$log = new Logger('test_log_name');
$log->pushHandler(new StreamHandler('test.log', Logger::ERROR));

// add records to the log
$log->warn('Foo', ['s']);
$log->error('Bar', ['f'=>'e']);