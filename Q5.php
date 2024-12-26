<?php

// Function to calculate the area of a triangle
function calculateTriangleArea($base, $height) {
    return 0.5 * $base * $height;
}

// Example usage
$base = 15;    // Base of the triangle
$height = 5;   // Height of the triangle

$area = calculateTriangleArea($base, $height); // Calling the function

// Display the result
echo "The area of the triangle with base $base and height $height is: $area";

?>
