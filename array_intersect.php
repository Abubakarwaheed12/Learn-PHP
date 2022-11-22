<?php
//array_intersect is used to match the common  values of two array 
//
$a1=["red", "green", "blue", "yellow"];
$a2=["red", "gama", "bloon", "yellow"];
$a3=["red", "gama", "bloon", "yel"];

$newArray=array_intersect($a1, $a2, $a3);
echo "<pre>";
print_r($newArray);
echo "</pre> <br>";

//array_intersect_assoc is used to match the key and also the value of key

$a1=["a"=>"red", "b"=> "green", "c"=> "blue", "d"=> "yellow"];
$a2=["a"=> "red","b"=> "gama", "c"=> "bloon", "d"=> "yellow"];
$a3=["a"=> "red", "b"=> "gama", "c"=> "bloon", "d"=> "yel"];

$newArray=array_intersect_assoc($a1, $a2, $a3);
echo "<pre>";
print_r($newArray);
echo "</pre>"

// array_intrsect_uasssoc is used for userdefinend dattype comparison
function compare($a, $b){
    if($a===$b){
        return 0;
    }
    return($a>$b)? 1 : - 1 ;
}

$a1=["a"=>"red", "b"=> "green", "c"=> "blue", "d"=> "yellow"];
$a2=["a"=> "red","b"=> "gama", "c"=> "bloon", "d"=> "yellow"];

$newArray=array_intersect_uassoc($a1, $a2,  "compare");
echo "<pre>";
print_r($newArray);
echo "</pre>"
?>