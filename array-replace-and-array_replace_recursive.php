<?php
// array-replace and array_replace recursive is used to replace the value and values store in new array

$fruits=["banan", "mango", "apple", 0=> "peach"];
$vegitable=["potato"];

$newarray= array_replace($fruits,  $vegitable);

print_r($newarray);

echo $newarray;
?>