<?php

class Car {
    public $color;
    public $fuel;

    public function go() {

    }

    public function turn() {

    }

    public function stop() {

    }
}

$myCar = new Car;
$myCar -> color = 'red';
$myCar -> fuel = 50;

$myCar -> go();
$myCar -> turn();
$myCar -> stop();