<?php

spl_autoload_register(function($class_name) {
    require "{$class_name}.php";
});

$calc = new Calculator();

/*
 * Valid strings for first argument in calculate function:

 * addition
 * subtraction
 * multiplication
 * division
 */

echo $calc->calculate('multiplication', 4, 4);

