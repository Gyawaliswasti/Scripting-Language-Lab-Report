<?php
function findLargest($a, $b, $c) {
    // Compare the three numbers and return the largest
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Example usage
echo "Largest number among 10, 5, 20: " . findLargest(10, 5, 20) . "<br>"; // Output: 30
echo "Largest number among 7, 10, 2: " . findLargest(7, 10, 2) . "<br>"; // Output: 10
echo "Largest number among -1, -5, -10: " . findLargest(-1, -5, -10) . "<br>"; // Output: -1
?>