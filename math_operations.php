<?php
class MathOperations {
    // Methods for basic mathematical operations
    public function add($num1, $num2) {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2) {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2) {
        return $num1 * $num2;
    }

    public function divide($num1, $num2) {
        // Check for division by zero
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return "Cannot divide by zero!";
        }
    }
}
?>
