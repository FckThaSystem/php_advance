<?php

namespace hillel\auto;

class Driver
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function driveBus(Bus $bus){
        echo $bus->start() . PHP_EOL;
    }

    public function driveTruck(Truck $truck){
        echo $truck->start() . PHP_EOL;
    }


}