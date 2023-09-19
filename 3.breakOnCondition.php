<?php
//Task 3: Break on Condition

$first = 0;
$second = 1;

echo "First 10 Fibonacci Numbers (up to 100):\n";

for ($i = 1; $i <= 10; $i++) {
    $next = $first + $second;

    if ($next > 100) {
        break;
    }
    echo $next . " ";

    $first = $second;
    $second = $next;
}