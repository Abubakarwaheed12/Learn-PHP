<?php
// array_value  return the all values of array 

$color=["a"=>"red", "b"=>"blue ", "c"=>"yellow"];
$newArray=array_values($color);

echo "<pre>";
print_r($newArray);
echo "</pre> <br>";


// array_unique return the unique value of array 

$color=["a"=>"red", "b"=>"blue ", "c"=>"yellow", "d"=>"red"];
$newArray=array_unique($color);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>