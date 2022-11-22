<?php
function test(){

    echo "hello this is test function   <br>";
}
test();


//functions with parameters:

function sum($a, $b){
    echo $a+$b . "<br>";
}
sum(19, 10);

//functions with returning value:

// function mul($c, $d){
//     echo $c*$d;
//     return $z;
// }
// $z;
// $z=mul(40,2);
//functions with returning value:

function sub($mth, $eng, $sc){
    $sum=$mth+ $eng+ $sc . "<br>";
    return $sum;
}
$total=sub(59, 56 ,79);
// echo $total . "<br>";
function per($st){
    $pr= $st / 3;
    echo $pr . "<br>";
}
per($total);

// function with call by reference or call by value
// call by value 
function  val($vl){
    $vl .=" oye <br>";
return $vl;

}
$rs=val("hello");
echo $rs;

// call by reference 
function ref($vil){
    $vil = " hhifhesj";

}

$rf=ref("hello i am abu bakar waheed");
echo $rf;


// recursive  function  ( this function is called by inside the function)
function rec($n){
if($n<5){
    echo $n . "<br>";
}
else{
    echo " wrong entry";
}
rec($; 

}
 
rec(1);

// function

?>