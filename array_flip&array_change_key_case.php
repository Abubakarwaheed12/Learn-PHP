<?php
// array-flip ma hum associative array ma key aor value ko interchange kartyhan is m AIK hi patrameter ha
$age=[
    "bill"=> 40,
    "joe"=> 30,
    "peter"=> 34
];

$newArray=array_flip($age);
echo "<pre>";
print_r($newArray);
echo "</pre> <br>";
// array_change_key_case ma hum key ko lower case ya upper case kar sakty han 
$age=[
    "bill"=> 40,
    "joe"=> 30,
    "peter"=> 34
];

$newArray=array_change_key_case($age, CASE_UPPER);
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>