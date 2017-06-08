<?php
$number = 14;
$color = "red";
$name = "Jivan";

$message = "Name: $name <br>";
$message .= "Fav. Color: $color <br>";
$message .= "Answer: $number <br>";


echo "Concatenating a number ($number) with a string ($name) in double quotes <br> ";
echo 'Concatenating a number ' . $number . ' with a string '. $name . ' in single quotes <br>';
echo $message;

