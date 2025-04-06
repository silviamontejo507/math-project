<?php
// Function to calculate the sum of two numbers
function add($num1, $num2) {
    return $num1 + $num2;
}

// Main function to demonstrate addition with variables and constants
function main() {
    // Define a variable
    $result = add(5, 3);

    // Output the result
    echo "The sum is: " . $result;

    // Define another variable using a constant
    $constant = 7;
    $result2 = add($result, $constant);

    // Output the final result with variables and constants
    echo "Result after adding the constant: " . $result2;
}

// Call the main function to start the execution of the code
main();
