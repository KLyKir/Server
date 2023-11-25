<?php

require __DIR__.'/../vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log = new Logger('name');
$log->pushHandler(new StreamHandler('../Logs/Logger.log', Level::Warning));

$log->warning('Foo');
$log->error('Bar');
$someInfo = file_get_contents('../Logs/Logger.log');
var_dump($someInfo);