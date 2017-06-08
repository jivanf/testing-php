<?php
$languages = ["JavaScript", "PHP", "HTML", "CSS", "C++"];

for ($i = 0; $i < sizeof($languages); $i++) {
    echo "$languages[$i] <br>";
}

print_r($languages);

echo "<br>";

//Separates first array from second array
echo "<br>";

//Adds 'Java' to languages array
$languages[4] = "Java";

for ($i = 0; $i < sizeof($languages); $i++) {
    echo "$languages[$i] <br>";
}

print_r($languages);




