<?php

class Car {
    public $color;
    public $speed;
    public $brand;

    public function getBrand() {
        return $this->brand;
    }

    public function getSpeed() {
        return $this->speed;
    }

    public function getColor() {
        return $this->color;
    }

    public function setSpeed($speed) {
        $this->speed = $speed;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

}