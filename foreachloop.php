<?php
// for each loop is mostly used for arrays 
// for each loop syntax

/*
foreach(array as value) {

}
*/
$age=[
    23,
    34,
    43
];
// print_r($age);
// we can display it with the help of foreach loop
foreach($age as $key => $value){
    echo "$key = $value <br>" ;
}

?>