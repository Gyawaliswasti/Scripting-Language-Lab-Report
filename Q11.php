<?php
function divisibleByFive($number) {
    if ($number % 5 == 0) {
        return true;
    } else {
        return false;
    }
}
echo 'The number 500 is divisible by 5? <br>';
if(divisibleByFive(500) == '1') {
    echo "Result:True";
} else {
    echo "Result:False";
}