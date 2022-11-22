<?php
//array column is used to pick the values of multidimensional array with respect to column
$array=[
    ["id"=>1,
     "name"=>"abu bakar",
     "father name"=> "waheed ahmad"
],
    ["id"=>2,
     "name"=>"saad",
     "father name"=> "majeed ahmad"
],
    ["id"=>3,
     "name"=>"ubaid",
     "father name"=> "majeed ahmad"
]
];
$newarray=array_column($array, "name");

echo "<pre>";
print_r($newarray);
echo "</pre> <br>";

// array-chunk ko hum use kart han aik array ki values ko multidimensional array bnany k liye ex:
$cars=["toyata", "volve", "mercidi", "honda", "charad", "mehran", "civic"];

$chunk_array=array_chunk($cars, 2);
echo "<pre>";
print_r($chunk_array);
echo "</pre>";

?>