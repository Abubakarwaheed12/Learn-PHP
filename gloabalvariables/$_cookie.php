<?php
//$_Cookies used to store the temporary information in the users system 
    // 1 create cookie 
    // setcookie('name', 'value', 'expire' ,'path', 'domain' , 'secure', 'httponly');
    //2 view cookie value
    // $_COOKIE[name];

    
    
    $COOKIE_NAME="user";
    $COOKIE_VALUE="abu bakar";
        setcookie($COOKIE_NAME, $COOKIE_VALUE, time() +(86400) , "/" );    
    
?>
<html>
<body>

    <?php
    if(!isset($_COOKIE[$COOKIE_NAME])){
        echo "cookie is not set";
    }
    else{
         echo $_COOKIE[$COOKIE_NAME];
    }
      
        ?>

</body>
</html>