<?php
$conn=mysqli_connect("localhost","root","","school") or die("database not connect : " . mysqli_connect_error() . mysqli_connect_errno());
$sql="SELECT*FROM student";
$result=mysqli_query($conn, $sql) or die("query failed :" . mysqli_error($conn));
   print_r(mysqli_error_list($conn));
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['id'] . " ".$row['name'] . " ".$row['age'] . "<br>" ;
            }
        }
?>