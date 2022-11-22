<?php

// array slice is used to pick the values from the array and there are four parameters in this function 
// first is array name second is starting value and last quantity of arary items and last value true or false 
// by default ity is false and we can it true to see the original index of array  
$colors=["red ", "purple", "yellow ", "blue ", "green ",];

$newArray= array_slice($colors, 1, 3, true);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>