<?php
//Task 4: Fibonacci Series printing using a Function

function printFibonacciSeries($count) {
    $first = 0;
    $second = 1;
    
    echo "First $count Fibonacci Numbers:\n";
    
    for ($i = 1; $i <= $count; $i++) {

        echo $first . " ";
        
        $next = $first + $second;
        
        $first = $second;
        $second = $next;
    }
}

printFibonacciSeries(15);