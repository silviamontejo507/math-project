<?php
// Load necessary libraries and dependencies
require_once 'vendor/autoload.php';

// Define variables or constants
$base = 10;
$n = 5;
$a = 2;

// Calculate sum of first n terms of a geometric sequence
if ($n >= $a) {
    $sum = (pow($base, $n) - 1)/($base - 1);
} else {
    $sum = 0; // or any other appropriate value based on your requirements
}

// Output the result to the terminal
echo "The sum of the first {$n} terms of a geometric sequence with base {$base} and common ratio 1 is: " . $sum;
?>
