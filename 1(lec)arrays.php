<?php
// arrays are very important in  php 

$colors=array("red","green","blue","yellow");
// echo $colors[0] . "<br>";
// echo $colors[1] . "<br>";
// echo $colors[2] . "<br>";
// echo $colors[3];

// print for all values of array there is a php functon for this 
// for better readability we can use html pre tag
echo "<pre>";
print_r($colors);
echo "</pre>";

// and here is another method for array displaying which use loop
 // and also we can use a html list tag 
 echo "<ul>";
for($i=0;$i<4; $i++){
    echo "<li> $colors[$i]  </li>";
}
echo "</ul>";

?>