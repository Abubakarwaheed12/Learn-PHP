<?php
// array walk used for associative run ye array ki har value k sath function ko run karta ha 
// array_walk(array, function , parameter);
$colors=[
    "a"=>"red",
    "b"=>"green",
    "c"=>"blue",
    "d"=>"orange"
];
array_walk($colors , "myfunction" ," is the key of");
function myfunction( $value, $key   , $param){
    echo "$key   $param  $value  <br>";
}


// array_walk doesn't properly work with dim-array (array_walk_recursive();)


?>