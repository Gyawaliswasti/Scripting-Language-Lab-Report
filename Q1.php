<?php
// Creating variables with different datatypes
$integerVar = 42;
$floatVar = 3.14;
$stringVar = "Hello, World!";
$booleanVar = true;
$arrayVar = array(1, 2, 3, "PHP", true);

// Part (a): Print all the data using echo and print
echo "Integer: $integerVar\n";
echo "Float: $floatVar\n";
echo "String: $stringVar\n";
echo "Boolean: " . ($booleanVar ? 'true' : 'false') . "\n";

print "Integer: $integerVar\n";
print "Float: $floatVar\n";
print "String: $stringVar\n";
print "Boolean: " . ($booleanVar ? 'true' : 'false') . "\n";

// Part (b): Display content of the array using print_r and var_dump
print_r($arrayVar);
echo "\n";
var_dump($arrayVar);
echo "\n";

// Part (c): Display result of checking data types
echo "\nData Type Checks:\n";
echo "Is \$integerVar is integer? " . (is_int($integerVar) ? 'Yes' : 'No') . "\n";
echo "Is \$floatVar is float? " . (is_float($floatVar) ? 'Yes' : 'No') . "\n";
echo "Is \$stringVar is string? " . (is_string($stringVar) ? 'Yes' : 'No') . "\n";
echo "Is \$booleanVar is boolean? " . (is_bool($booleanVar) ? 'Yes' : 'No') . "\n";
echo "Is \$arrayVar is array? " . (is_array($arrayVar) ? 'Yes' : 'No') . "\n";
?>
