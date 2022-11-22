<?php
// array shift is used to remove the value from first of array
// array unshift is used to add the value in first of array 
$names=["abu bakar", " qasim ", " waheed"];
//array_shift($names);

array_unshift($names , "saad", "ali");

echo "<pre>";
print_r($names);
echo "</pre>";

?>