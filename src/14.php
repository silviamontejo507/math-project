<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 5 == 0) {
        $sum += $i;
    }
}
echo "The sum of the multiples of 3 and 5 below 100 is: " . $sum . PHP_EOL;
?>