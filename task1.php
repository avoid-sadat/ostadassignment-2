<?php
function printEvenNumbersFor($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

// Call the function to print even numbers from 1 to 20 with a step of 2
printEvenNumbersFor(2, 20, 2);
?>
