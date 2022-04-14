<?php
include 'MovableInterface.php';
include 'Car.php';
include 'Bus.php';
include 'Truck.php';

function startEngine(MovableInterface $starting){
    echo $starting->start() . PHP_EOL;
}
function stopEngine(MovableInterface $stopping){
    echo $stopping->stop() . PHP_EOL;
}
function speedUp (MovableInterface $speedUp){
    echo $speedUp->up(10) . PHP_EOL;
}
function speedDown (MovableInterface $speedDown){
    echo $speedDown->down(10) . PHP_EOL;
}
$cars = [
    new Bus(120),
    new Truck(120)
];

startEngine($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedDown($cars[0]);
speedUp($cars[0]);
speedDown($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
speedUp($cars[0]);
stopEngine($cars[0]);