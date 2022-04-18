<?php
namespace hillel\auto;

use hillel\auto\MovableInterface as MovableInterface;

abstract class Car implements MovableInterface
{
    protected $maxSpeed;

    protected $speed;

    public static $country;

    private $engineStart;

    public const TYPE_SEDAN = 'SEDAN';

    public const TYPE_HATCHBACK = 'HATCHBACK';

    public const TYPE_COUPE = 'COUPE';

    public const TYPE_LIFT_BACK = 'LIFT-BACK';

    public function __construct($maxSpeed, $speed = 0)
    {
        $this->maxSpeed = $maxSpeed;
    }
    public function getCountry(){
        return self::$country;
    }
    public function getType(): array
    {
        return array(self::TYPE_SEDAN,
                     self::TYPE_HATCHBACK,
                     self::TYPE_COUPE,
                     self::TYPE_LIFT_BACK);
    }
    public function setCountry($country){
        self::$country = $country;
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
