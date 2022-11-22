<?php
// $_SESSION used to store information temporarily on server
// three steps to set and get session value
        // session_start();
        // $_SESSION[name]=value;
        // echo $_SESSION[name];
// for delete session
        // session_destroy();
        // session_unset(); remove all session variables

        session_start();
            $_SESSION['user']="abubakar";
            echo "session variable is set";
    
?>