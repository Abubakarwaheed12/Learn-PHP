<?php
//mktime(); show the past time 
//gmmktime(); same as mktime but its show the time in GMT format
echo date("d/m/Y" , mktime(0,0,0,8, 15,2001));
?>