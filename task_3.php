<?php
// Define the function sortGradesAscending
function sortGradesDescending($grades) {
  // Sort the grades in descending order.
  rsort($grades);

  // Print the sorted grades as an array.
  print_r($grades);
}
$grades = [85, 92, 78, 88, 95];

// Sort the grades in descending order and print the sorted grades as an array.
sortGradesDescending($grades);
?>
