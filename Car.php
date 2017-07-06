<?php

class Car {
    public $color;
    public $speed;
    public $brand;

    public function __construct($brand, $color, $speed) {
        $this->brand = $brand;
        $this->color = $color;
        $this->speed = $speed;
    }

}