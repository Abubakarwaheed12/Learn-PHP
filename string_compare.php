<?php
//string compare functions
$s1="hello world!";
$s2="Hello world!";
echo strcmp($s1, $s2) , "<br>";
// echo strlen($s1);
echo strncmp($s1, $s2 , 9) , "<br>" ; // comparing with numbers
$s3="abu bakar"; 
$s4="abu bakar";
echo strcasecmp($s3 , $s4 ) . "<br>";
//substr_compare 
echo substr_compare($s3 , $s4 , 4 , TRUE) . "<br>";

$s3="abu bakar"; 
$s4="abu bakar";
echo similar_text($s1 , $s4);
?>