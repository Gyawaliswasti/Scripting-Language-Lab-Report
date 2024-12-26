<?php

// Function to convert age in years to age in days
function convertAgeToDays($ageInYears) {
    return $ageInYears * 365; // Assumes no leap years
}

// Example usage
$ageInYears = 23; // Input age in years

$ageInDays = convertAgeToDays($ageInYears); // Call the function

// Display the result
echo "Age in years: $ageInYears<br>";
echo "Age in days: $ageInDays";

?>
