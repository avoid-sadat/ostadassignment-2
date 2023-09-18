<?php
$num1 = 0;
$num2 = 1;

echo "The first 10 Fibonacci numbers: ";

for ($i = 0; $i < 10; $i++) {
    // Calculate the next Fibonacci number
    $next = $num1 + $num2;

    // Check if the next Fibonacci number exceeds 100
    if ($next > 100) {
        break; // Exit the loop if it exceeds 100
    }

    // Print the current Fibonacci number
    echo $next . ' ';

    // Update the Fibonacci sequence variables
    $num1 = $num2;
    $num2 = $next;
}

echo "\n";
?>
