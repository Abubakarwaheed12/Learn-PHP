<?php
// local and global variables in php 
// local variables are these variables that inside the functio 
// ex:
$x=10;
function test(){
    // we can use global variable inside the function bu using global keyword
    global $x;
    echo " the value of X  inside the function is  " . $x . "<br>";
    
}
 // calling the function
 test();
 echo " the value of X  inside the function is " . $x;
//  so the conclusion is that the varibale inside the function is a local varibal and 
// and variblea outside the function is global variable

?>