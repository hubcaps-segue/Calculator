<?php
require_once 'math_operations.php';

class Calculator {
    // Instance variables
    private $mathOperations;

    // Constructor
    public function __construct() {
        $this->mathOperations = new MathOperations();
    }

    // Methods for different mathematical operations
    public function add($num1, $num2) {
        return $this->mathOperations->add($num1, $num2);
    }

    public function subtract($num1, $num2) {
        return $this->mathOperations->subtract($num1, $num2);
    }

    public function multiply($num1, $num2) {
        return $this->mathOperations->multiply($num1, $num2);
    }

    public function divide($num1, $num2) {
        return $this->mathOperations->divide($num1, $num2);
    }
}
?>
