<?php

abstract class Car implements MovableInterface
{
    protected $maxSpeed;

    protected $speed;

    private $engineStart;

    public function __construct($maxSpeed, $speed = 0)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getSpeed(){
        return $this->speed;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
    public function getEngineStart(){
        return $this->engineStart;
    }
    public function setEngineStart($start){
        $this->engineStart = $start;
    }
}
