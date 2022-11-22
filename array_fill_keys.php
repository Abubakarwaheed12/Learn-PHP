<?php
//array fill ko hum use karty han new array bnana k first value key ho gi aor sab ki key fix ho gi
// array_fill_keys(array , value);
// and return a new array 
$a=["a", "b", "c", "d"];
$newArray = array_fill_keys($a, "testing");

echo "<pre>";
print_r($newArray);
echo "</pre>";

// array_fill ko use kart han hum array sy value utha k un ki aik hi key bnany k liye
// array_fill(index, number, value)
$a=["a", "b", "c", "d"];


echo "<pre>";
print_r(array_fill(1 , 3, "testing"));
echo "</pre>";

?>