<?php

class Volkswagen extends Car implements Engine {

    public function getSpeed() {
        return $this->speed;
    }

    public function setSpeed($newSpeed) {
        $this->speed = $newSpeed;
    }
}