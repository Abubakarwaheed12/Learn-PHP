<?php
// str_split hun stri  k aik aik charachter ki value ko array ma store karwany k liye lety han 
$name="Abu bakar"; 
$ar=str_split($name);
echo "<pre>";
    print_r($ar);
    echo "</pre>";


    // chunk_split hun string ma kuch new add karny kl lye 

    $name1="Abu bakar waheed"; 
$ar1=chunk_split($name1 , 3, ".....");
echo $ar1;

?>