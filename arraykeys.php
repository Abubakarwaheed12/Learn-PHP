<?php
// array keys is used to determine the key of Array 
//array_keys();
//array_key_first(); come in php version 7.3.0
//array_key_last();  come in php version 7.3.0
//array_keys_exits();
//key_exists();
// lets start__
 
$colors=["red", "green", "blue", "yellow"];

echo "<pre>";
print_r(array_keys($colors));
echo "</pre> <br> <br>";


echo "<pre>";
print_r(array_key_first($colors));
echo "</pre> <br> <br>";

echo "<pre>";
print_r(array_key_last($colors));
echo "</pre> <br> <br>";

echo "<pre>";
print_r(array_key_exists( 3 ,$colors));
echo "</pre> <br> <br>";

?>