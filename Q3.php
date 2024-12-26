<?php
function convertMinutesToSeconds($minutes) { 
    return $minutes * 60;                   
}

$minutes = 5;                               
$seconds = convertMinutesToSeconds($minutes); 
echo "$minutes minute(s) is equal to $seconds second(s)."; // Output result
?>