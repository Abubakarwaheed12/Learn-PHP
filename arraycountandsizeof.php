<?php
/*there are three ways to count value in array 
1. count();
2.sizeof();
3. array_count_values();
examples:
*/
// 1 
$fruits=["orange", "banana", "mango", "apple"];
$len=sizeof($fruits);
//sizeof() and count()is same
for($i=0; $i<$len; $i++){
    echo $fruits[$i] . "<br>";
}
echo "<pre>";
print_r(array_count_values($fruits));
echo "</pre>";

// in mutlidimensional array:
$emp=[
   "1" => [1,"ahmad", "manager", 12000],
    [2,"ayan", "saleman", 10000],
    [3,"saad", "operator", 12000],
    [4,"ali", "office boy", 1200]
];
echo count($emp['1'],1);

?>