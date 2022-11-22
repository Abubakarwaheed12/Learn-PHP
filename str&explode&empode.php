<?php
//array_explode ko hum use karty han string ki vaue ko arry bnany k liye

$str="hello world abu bakar here";
    $arr1= explode(" ", $str, 3);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";


//array_explode ko hum use karty han string ki vaue ko arry bnany k liye
$arr2=Array(
    '0' => "hello",
    '1' => "world",
     '2' => "abu bakar here"
);
 $str1=implode(" " , $arr2);
 echo "<pre>";
    print_r($str1);
    echo "</pre>";

?>