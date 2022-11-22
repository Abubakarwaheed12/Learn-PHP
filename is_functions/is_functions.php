<?php
  $a="abu bakar waheed";
   
  echo is_string($a) . "<br>";
         
        $b=12;
        var_dump(is_int($a));

        if(is_string($a)){
            echo "<br>  $a is an integer value";
        }else{
            echo "<br>  $a is not an integer value";
        }

        $c=12.1;
        if(is_float($c)){
            echo "<br> $c is an float value ";
        }else{
            echo "<br> $c is not an float value ";
        }

        $d=true;
        if(is_bool($d)){
            echo "<br> $d is an boolean value ";
        }else{
            echo "<br> $d is not an boolean value ";
        }

        $x=[
            "apple",
            "mango",
            "banana",
            "peach"
        ];
        if(is_array($x)){
            echo "<br> $x is an array value ";
        }else{
            echo "<br> $d is not an array value ";
        }

            function test(){
               echo "heloo world";   
            }
             echo is_callable('test');
             var_dump(is_callable('test'));
             
?>