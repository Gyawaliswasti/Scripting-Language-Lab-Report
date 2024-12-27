<?php
// Creating variables with different datatypes
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$booleanVar = true;
$arrayVar = array(1, 2, 3, "PHP", true);

// Part (a): Print all the data using echo and print
echo "Integer: $integerVar <br>";
echo "Float: $floatVar <br>";
echo "String: $stringVar <br>";
echo "Boolean: " . ($booleanVar ? 'true' : 'false') . " <br>";

print "Integer: $integerVar<br>";
print "Float: $floatVar<br>";
print "String: $stringVar<br>";
print "Boolean: " . ($booleanVar ? 'true' : 'false') . "<br>";

// Part (b): Display content of the array using print_r and var_dump
print_r($arrayVar);
echo "<br>";

var_dump($arrayVar);
echo "<br>";

// Part (c): Display result of checking data types
echo "\nData Type Checks:\n";
echo "Is \$integerVar is integer? " . (is_int($integerVar) ? 'Yes' : 'No') . "<br>";
echo "Is \$floatVar is float? " . (is_float($floatVar) ? 'Yes' : 'No') . "<br>";
echo "Is \$stringVar is string? " . (is_string($stringVar) ? 'Yes' : 'No') . " <br>";
echo "Is \$booleanVar is boolean? " . (is_bool($booleanVar) ? 'Yes' : 'No') . " <br>";
echo "Is \$arrayVar is array? " . (is_array($arrayVar) ? 'Yes' : 'No') . " <br>";
?>
