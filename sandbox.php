<?php

function __autoload($class_name){
    require $class_name . ".php";
}

$ferrari = new Ferrari('red', 200);
$volkswagen = new Volkswagen('white', 120);

echo 'Color of ' . get_class($ferrari) . ' is: ' . $ferrari->getColor() . "<br>";
echo 'Color of ' . get_class($volkswagen) . ' is: ' . $volkswagen->getColor() . "<br>";

echo "<br>";

echo 'Speed of ' . get_class($ferrari) . ' is: ' . $ferrari->getSpeed() . "<br>";
echo 'Speed of ' . get_class($volkswagen) . ' is: ' . $volkswagen->getSpeed() . "<br>";

