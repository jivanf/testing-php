<?php

// include composer autoload
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$image = Image::make('img/leaf.png')->resize(900, 500)->save('img/leaf2.png');


echo "<img src='img/leaf.png'>";
echo "<img src='img/leaf2.png'>";