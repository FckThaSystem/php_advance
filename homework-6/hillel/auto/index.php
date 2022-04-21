<?php

// ** autoloader

include 'ClassLoader.php';

// ** static methods

$engine = new \hillel\auto\Engine('diesel', 5.2, 400);

$bus = new \hillel\auto\Bus(120, $engine);

// композиция
echo $bus->getBodyStats() . PHP_EOL;

// агрегация
echo $bus->getEngineStats() . PHP_EOL;



// класс Driver
$driver = new \hillel\auto\Driver('Ivan');

$truck = new \hillel\auto\Truck(130, $engine);

$driver->driveBus($bus);

$driver->driveTruck($truck);
