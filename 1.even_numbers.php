<?php
//Task 1: Looping with Increment using a Function

// Function to print even numbers using a for loop
function printEvenNumbersFor($start, $end, $step) {
    echo "<h3>Print even numbers using a for loop</h3>";
    for ($i = $start; $i <= $end; $i += $step) {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
    }
    echo "<br>";
}

// Function to print even numbers using a while loop
function printEvenNumbersWhile($start, $end, $step) {
    echo "<h3>Print even numbers using a while loop</h3>";
    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
        $i += $step;
    }
    echo "<br>";
}

// Function to print even numbers using a do-while loop
function printEvenNumbersDoWhile($start, $end, $step) {
    echo "<h3>Print even numbers using a do-while loop</h3>";
    $i = $start;
    do {
        if ($i % 2 == 0) {
            echo $i . ", ";
        }
        $i += $step;
    } while ($i <= $end);
    echo "<br>";
}

// Call the functions to print even numbers
printEvenNumbersFor(2, 20, 2);
printEvenNumbersWhile(2, 20, 2);
printEvenNumbersDoWhile(2, 20, 2);