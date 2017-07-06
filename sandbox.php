<?php

require 'Car.php';
require 'Ferrari.php';
require 'Volkswagen.php';

$ferrari = new Ferrari('red', '200 kp/h');
$volkswagen = new Volkswagen('white', '120 kp/h');

echo "Color of Ferrari is: " . $ferrari->color;
echo "<br>";
echo "Speed of Ferrari is: " . $ferrari->speed;
echo "<br>";

echo "<br>";

echo "Color of Volkswagen is: " . $volkswagen->color;
echo "<br>";
echo "Speed of Volkswagen is: " . $volkswagen->speed;
