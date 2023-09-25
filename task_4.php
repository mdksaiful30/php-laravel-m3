<?php
// Define the multidimensional array $studentGrades
$studentGrades = [
    'Student1' => ['Math' => 83, 'English' => 91, 'Science' => 79],
    'Student2' => ['Math' => 93, 'English' => 89, 'Science' => 92],
    'Student3' => ['Math' => 79, 'English' => 88, 'Science' => 96]
];

// Function to calculate and print the average grade for each student
function calculateAndPrintAverages($grades) {
    foreach ($grades as $student => $subjectGrades) {
        // Calculate the average grade for each student
        $averageGrade = array_sum($subjectGrades) / count($subjectGrades);

        // Print the average grade for the student
        echo "$student's average grade: $averageGrade\n";
    }
}

// Call the function to calculate and print the average grades
calculateAndPrintAverages($studentGrades);
?>

