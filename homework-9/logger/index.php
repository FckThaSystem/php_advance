<?php

include __DIR__ . '/../vendor/autoload.php';

$formatter = new \logger\Formatter();
$writer = new \logger\Writer($formatter);
$logger = new \logger\setLog($writer);

$logger->debug('hello world', [0 => '11', 1 => '12']);