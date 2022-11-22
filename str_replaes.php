<?php
// strinig replace functions 
// str_replace(find replace strnig name);
// str_ireplace(find replace strnig name);case_insensitive

$a="i love php i love php too ";
echo $a . "<br>"; 
$b=str_replace("php", "javascript", $a);
echo $b . "<br>";
// substr_replace(); aik sy zyada words ko replace karny k liye
$c="i love php i love php too  ";
echo $c . "<br>"; 
$d=substr_replace($a , "python and", 7, 18);
echo $d . "<br>";
// strtr() is used for replace character in string
$n= "hello world i am abu bakar waheed";
echo strtr($n , "eo" , "ab");
?>