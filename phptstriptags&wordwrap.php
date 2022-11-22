<?php
//worldwrap for break the string
//strip tags for removing the tags 
$a="hello <b>world</b> hello <i>earth</i> ";
// echo strip_tags($a);
echo $a . "<br>";

$str="hello the world is beautiful";
echo wordwrap($str , 4 , "<br>", true);
?>