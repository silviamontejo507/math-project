<?php
function randomMathFunction() {
    $mathFunctions = [
        "add" => "echo 5 + 3;",
        "subtract" => "echo 10 - 2;",
        "multiply" => "echo 8 * 4;",
        "divide" => "echo 20 / 4;"
    ];

    return randomMathFunction();
}

$randomMath = randomMathFunction();
echo $randomMath;
?>
