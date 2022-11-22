<?php
//str_len() humy string ki vhar btata ha
//str_word_count 
$str="hello word";

echo strlen($str). "<br>";
$str="hello word how are you";

$arr= str_word_count($str , 2) ;

echo "<pre>";
print_r($arr);
echo "</pre> <br>";

$sub="hello world, the world is nice";
echo substr_count($sub, "world");
?>