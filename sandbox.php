<?php

require 'Car.php';

$car = new Car('Ferrari', 'white', '200 kp/h');

echo "Brand of the car is: " . $car->brand;
echo '<br>';
echo "Color of the car is: " . $car->color;
echo '<br>';
echo "Speed of the car is: " . $car->speed;
