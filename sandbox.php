<?php

require 'Car.php';
require 'Engine.php';
require 'Volkswagen.php';
require 'Ferrari.php';


$ferrari = new Ferrari('red', 200);
$volkswagen = new Volkswagen('white', 120);

function checkSpeed($car1, $car2) {
    if ($car1->speed > $car2->speed) {
        echo  get_class($car1) .  ' is faster than ' . get_class($car2);
    }

    else {
        echo get_class($car2) . ' is faster than ' . get_class($car1);
    }

    echo "<br>";
}


checkSpeed($ferrari, $volkswagen);

$ferrari->speed = 150;
$volkswagen->speed = 180;

checkSpeed($ferrari, $volkswagen);
