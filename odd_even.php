<?php
// PHP program to find odd and even numbers

// Define an array of numbers
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

// Arrays to store odd and even numbers
$odd_numbers = array();
$even_numbers = array();

// Loop through each number
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        // Even number
        $even_numbers[] = $num;
    } else {
        // Odd number
        $odd_numbers[] = $num;
    }
}

// Display the results
echo "Even Numbers: " . implode(", ", $even_numbers) . "<br>";
echo "Odd Numbers: " . implode(", ", $odd_numbers);
?>