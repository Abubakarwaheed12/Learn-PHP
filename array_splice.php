<?php
// arrray_splice is used to  remove and add the values in array

$color=["red", "green", "blue", "yellow", "brown"];
$colors=["red", "green", "blue"];
array_splice($color , 1 , 3 , $colors );
echo "<pre>";
print_r($color);
echo "</pre>"

?>