<?php

class Truck extends Car
{
    public function start(){
        echo 'Truck started engine' . PHP_EOL;
        $this->setEngineStart(true);
    }
    public function stop(){
        $this->setSpeed(0);
        echo 'Truck stopped engine'. PHP_EOL;
        $this->setEngineStart(false);
    }
    public function up($unit){
        $engine = $this->getEngineStart();
        if($engine){
            $speed = $this->getSpeed();
            $uppedSpeed = $speed + $unit;
            $maxSpeed = $this->getMaxSpeed();
            if($maxSpeed > $uppedSpeed) {
                $this->setSpeed($uppedSpeed);
                echo 'Truck speed incrased. Now it`s' . $unit . 'km/h. Max speed is - ' . $maxSpeed . PHP_EOL;
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
            echo 'Truck speed decrased. Now it`s' . $unit . 'km/h. Max speed is - ' . $maxSpeed . PHP_EOL;
        }else{
            echo 'Engine is stopped. Please start engine';
        }
    }
}