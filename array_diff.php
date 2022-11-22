<?php
// array_dif is used to find the differnce between arays
$a1=["a"=>"red" ,"b"=>"gree", "c"=>"blu", "d"=>"yellow" ];

$a2=["a"=>"red" ,"e"=>"green", "f"=>"blue", "d"=>"yellow" ];

$newArray=array_diff($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
// almost 6 functions with array diff 
// array_diff_key


$a1=["a"=>"red" ,"b"=>"green", "c"=>"blue", "d"=>"yellow" ];

$a2=["a"=>"red" ,"b"=>"green", "f"=>"blue", "d"=>"yellow" ];

$newArray=array_diff_key($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

//array_diff_assoc is 
$a1=["a"=>"red" ,"b"=>"gree", "c"=>"blu", "d"=>"yellow" ];

$a2=["a"=>"red" ,"c"=>"green", "f"=>"blue", "d"=>"yellow" ];

$newArray=array_diff_assoc($a1,$a2);

echo "<pre>";
print_r($newArray);
echo "</pre>";
//array_udiff-uassoc  is used to user define functions  

echo '"hello world"';
$a="10";
$b=false;
$c=$a+$b;
echo $c;
?>
