<?php
/*
strstr($str , value before_value)
strchr($str , value before_value)
strichr($str , value before_value)
strpbrk();
*/
$a="i love php i love php too ";
echo  strstr($a , "i", true) . "<br>"; 

$a="i love php i love php too ";
echo  strchr($a , "i") ."<br> "; 

$a="i love php i love php too ";
echo  strpbrk($a , "v"); 

?>