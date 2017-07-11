<?php

class Calculator {

    public function __construct()
    {

    }

    use Adder, Subtractor, Divider, Multiplier;

    public function calculate($operationType, $num1, $num2)
    {
        if ($operationType == 'addition') {
            return $this->add($num1, $num2) . "<br>";
        }

        else if ($operationType == 'subtraction') {
            return $this->subtract($num1, $num2) . "<br>";
        }

        else if ($operationType == 'division') {
            return $this->divide($num1, $num2) . "<br>";
        }

        else if ($operationType == 'multiplication') {
            return $this->multiply($num1, $num2) . "<br>";
        }

        else {
            return 'Invalid argument.';
        }

    }




}