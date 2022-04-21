<?php

namespace hillel\auto;

use hillel\auto\Car as Car;

class Bus extends Car
{
    public function __construct($maxSpeed, Engine $engine, $speed = 0)
    {
        parent::__construct($maxSpeed, $engine, $speed);
        $this->body = new Body('green', 'bus', 22, 3.5);
    }

    public function getBodyStats(){
        return $this->body->getBodyStats();
    }
    public function start(){
        echo 'Bus started engine' . PHP_EOL;
        $this->setEngineStart(true);
    }
    public function stop(){
        $this->setSpeed(0);
        echo 'Bus stopped engine' . PHP_EOL;
        $this->setEngineStart(false);
    }
    public function up($unit){
        $engine = $this->getEngineStart();
        if($engine) {
            $speed = $this->getSpeed();
            $uppedSpeed = $speed + $unit;
            $this->setSpeed($uppedSpeed);
            $maxSpeed = $this->getMaxSpeed();
            if($maxSpeed > $uppedSpeed) {
                echo 'Bus speed incrased. Now it`s ' . $uppedSpeed . 'km/h. Max speed is - ' . $maxSpeed . PHP_EOL;
            }else{
                echo 'You can`t drive faster your max speed' . '(' . $maxSpeed . ')' . PHP_EOL;
            }
        }else{
            echo 'Engine is stopped. Please start engine';
        }
    }
    public function down($unit){
        $engine = $this->getEngineStart();
        if($engine) {
            $speed = $this->getSpeed();
            $downedSpeed = $speed + $unit;
            $this->setSpeed($downedSpeed);
            $maxSpeed = $this->getMaxSpeed();
            echo 'Bus speed decrased. Now it`s' . $downedSpeed . 'km/h. Max speed is - ' . $maxSpeed . PHP_EOL;
        }else{
            echo 'Engine is stopped. Please start engine';
        }
    }
}