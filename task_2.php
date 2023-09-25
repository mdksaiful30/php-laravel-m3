<?php
function removeEvenNumbers($numbers) {
    // Create a new array to store the odd numbers.
    $oddNumbers = [];

    // Iterate over the $numbers array and add the odd numbers to the $oddNumbers array.
    foreach ($numbers as $number) {
        if ($number % 2 !== 0) {
            $oddNumbers[] = $number;
        }
    }

    // Print the $oddNumbers array.
    print_r($oddNumbers);
}

// Define the array of numbers
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

// Call the function to remove the even numbers
removeEvenNumbers($numbers);
?>
