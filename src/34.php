<?php
// Load library
require_once 'vendor/autoload.php';

// Get input from user
$input = readline('Enter your query: ');

// Perform operations on the input
$result = performOperation($input);

// Display result
echo $result;
