<?php
// md5 hum password ko hexa form ma store karwany k liye use karty  han data base  ma
$str="sangha";
echo $str . "<br><br>";
echo md5($str, TRUE) ."<br>";
echo md5($str) ."<br>";
if(md5($str)=="ba84d371d68127d19806d1dc7dcb1db3"){
    echo "password matched <br>"; 
}
else
{
    echo "password is not march <br>";
}
echo sha1($str , TRUE);


?>