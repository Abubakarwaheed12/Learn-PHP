<?php
//array_reduce  array ki value ko aik single string ma return karta ha 
//array_reduce(array , function , initila );

// declaring function
function myfun($n , $m){
 return $n . "-" . $m;
}
$color=[
    "red",
    "orange",
    "banana"
];

$newArray=array_reduce($color, 'myfun');
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>