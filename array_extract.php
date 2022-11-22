<?php
// array_extract ko hum use karty han array ki keys ko varibale bnany k liye 
// array_extract(array , arrat_rules, prefix);
$names=[
    'a'=> "ali",
    'b'=> "saad",
    'c'=> "talha"
];
extract($names);

echo "value of b is : $b <br>";
echo "value of c is : $c <br>";
// compavt ko hum varibales ko associative array bnany k liye use karty han 
$num=132;
$char="dihewh";

$newarray =  compact ("num" , "char");
echo "<pre>";
print_r($newarray);
echo "<pre>";

?>