<?php

// ** autoloader

include 'ClassLoader.php';

// ** static methods

\hillel\auto\Bus::setCountry('Ukraine');
echo \hillel\auto\Bus::getCountry() . PHP_EOL;

// ** const
$bus = new \hillel\auto\Bus(120);

foreach ($bus->getType() as $type){
    echo $type . PHP_EOL;
}
