<?php

abstract class Car {

    public $color;
    public $speed;

    public function __construct($color, $speed) {
        $this->color = $color;
        $this->speed = $speed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }



}