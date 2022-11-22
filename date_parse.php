<?php
//date_parse(date); ye humy date ka data nikal k day ga as a array

$str= date_parse("02-02-2019");

echo "<pre>";
print_r($str);
echo "</pre> <br>";
echo $str['day'];
?>