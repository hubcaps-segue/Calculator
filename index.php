<?php
require_once 'calculator.php';

// Create an instance of the Calculator class
$calculator = new Calculator();

// Perform mathematical operations
$resultAddition = $calculator->add(10, 5);
$resultSubtraction = $calculator->subtract(10, 5);
$resultMultiplication = $calculator->multiply(10, 5);
$resultDivision = $calculator->divide(10, 5);

// Display the results
echo "Addition: $resultAddition<br>";
echo "Subtraction: $resultSubtraction<br>";
echo "Multiplication: $resultMultiplication<br>";
echo "Division: $resultDivision<br>";
?>
