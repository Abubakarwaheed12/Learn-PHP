<?php
// list function ko hum use karty han array ki value ko varibale ma store karny k liye 
// tradional way taht used for storing array value in vari able is
// $A=array[0];
// ye hum index array k sath ya phr numeric array k sath use kar sakty han 
$colors=["red", "blue", "green", "yellow"];
list($a , $b , $c)=$colors;

echo "value of a is : $a <br>"; 
echo "value of b is : $b <br>"; 
echo "value of c is : $c <br>"; 

// $a=$colors[3];
// echo $a;


?>