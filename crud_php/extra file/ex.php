<?php
$conn=mysqli_connect("192.185.76.144","abubaka","
tiiP~Tom_.}(","phppract_crud") or die("connection failed");
        $sql="SELECT*FROM student";
        $result=mysqli_query($conn , $sql) or die("query unsuccessfull");
         

        mysqli_close($conn);

?>