<?php
//array_map ko hum use karty raay ki value k sath function ko run karny k liye ye humy returm ma array deta 
//ex:
/*function square($n){
 return $n * $n *$n ;
}
$num=[1,2,3,4,5];
$newarray = array_map("square", $num);
echo "<pre>";
print_r($newarray);
echo "</pre> <br>";*/
// for two arrays
function square($n , $m){
    // for making associative array
    return [$n => $m ];
   }
   $num=[1,2,3,4,5];
   $colors=[
    "red",
    "yellow",
    "blue",
    "orange",
    "banana"
   ];
   $newarray = array_map("square", $num, $colors);
   echo "<pre>";
   print_r($newarray);
   echo "</pre>";
?>