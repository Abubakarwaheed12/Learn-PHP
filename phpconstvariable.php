<?php
// cannot use dollar sign with starting the variabe 
// the syntax is 
//define(name, value, case-insensitive )
// code example 

define("num", 400, true);
// we canntot change the value of constant variables
//echo num;
// we can use constant varibles into arithmatic calculations
$sum= num + 30;
echo $sum;
?>