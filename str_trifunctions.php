<?php
// trim function in string
/*
trim(string charlist);
rtrim(string charlist);
ltrim(string charlist);
chop(string charlist);  */

$a="abu bakar";
echo $a . "<br>";
echo trim($a , "a");
//ltrim () removes from left
//rtrim () removes from right
?>