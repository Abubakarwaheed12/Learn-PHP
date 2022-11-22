<?php
/*
strpos(); case sensitive
strrpos(); case sensitive
stripos(); in casesensitive
strripos(); in casesensitive
*/
$a="i love php i love PHP too!";
echo strrpos($a, "php" ) . "<br>";
// below in_case_sensivtive
$a="i love php i love PHP too!";
echo strripos($a, "php");

?>