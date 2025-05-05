<?php
$marks = [85, 85, 95]; // Correctly define the array
$marks[1] = 90; // Update the second element
$ave = array_sum($marks) / count($marks); // Calculate the average correctly

$passed = $ave >= 50; // Determine if passed

if ($passed) {
    echo "<p>Congratulations! You have passed the exam.</p>";
} else {
    echo "<p>Sorry, you have failed the exam.</p>";
}
?>