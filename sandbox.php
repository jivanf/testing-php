<?php

require 'Car.php';

$car = new Car();

$car->brand = 'Ferrari';
$car->speed = "200 kp/h";
$car->color = 'red';

echo "Brand of the car is: " . $car->getBrand();
echo "<br>";
echo "Color of the car is: " . $car->getColor();
echo "<br>";
echo "Speed of the car is: " . $car->getSpeed();
echo "<br>";
echo "<br>";

$car->setBrand("Volkswagen");
$car->setSpeed("120 kp/h");
$car->setColor("white");

echo "Brand of the car is: " . $car->getBrand();
echo "<br>";
echo "Color of the car is: " . $car->getColor();
echo "<br>";
echo "Speed of the car is: " . $car->getSpeed();
echo "<br>";


