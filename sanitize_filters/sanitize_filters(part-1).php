<?php
        $var="abubakjar32/;;'@gmail.com";
         $var=filter_var($var , FILTER_SANITIZE_EMAIL); 

        if(filter_var($var , FILTER_VALIDATE_EMAIL)){
            echo "<br>  $var is a valid email";
        }else{
            echo "<br>  $var is not a valid email";
        }

?>