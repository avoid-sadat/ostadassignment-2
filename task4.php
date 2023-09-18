<?php
function generateFibonacci($count) {
    $num1 = 0;
    $num2 = 1;

    echo "The first $count Fibonacci numbers: ";

    for ($i = 0; $i < $count; $i++) {
        // Print the current Fibonacci number
        echo $num1 . ' ';

        // Calculate the next Fibonacci number
        $next = $num1 + $num2;

        // Update the Fibonacci sequence variables
        $num1 = $num2;
        $num2 = $next;
    }

    echo "\n";
}

// Call the function to print the first 15 Fibonacci numbers
generateFibonacci(15);
?>
