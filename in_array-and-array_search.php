<?php
/*there are two functions to find values in arrar
1. in_array(reutrn in 1/0 1 mean true and 0 mean false)
2.array_search(search the key index)
*/
$fruits=["applae", "banana", "orange", "mango"];
// echo in_array("lime", $fruits);
//basically it uses with if satatement
if(in_array("lime", $fruits)){
    echo "find succefully";
}
else{
    echo "cant't find";
}
//now  search_array
echo array_search("banana", $fruits, true);  

?>