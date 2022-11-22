<?php
// array rand humy array ma sy random value utha k deta ha 
$colors=["red", "green ", "blue ", " yellow "];
$newArray=array_rand($colors, 2);

echo "<pre>";
print_r($newArray);
echo "</pre> <br>";
//echo $colors[$newArray];

// array shuffle array ma values ki position ko change kar deta ha ye naya array return nahi karta  
$colors=["red", "green ", "blue ", " yellow "];
shuffle($colors);

echo "<pre>";
print_r($colors);
echo "</pre>";

?>