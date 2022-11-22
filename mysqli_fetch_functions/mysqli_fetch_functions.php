<?php

use LDAP\Result;

$conn=mysqli_connect("localhost","root","","school") or die("DATABASE NOT FOUND");
$sql="SELECT*FROM students";
$result=mysqli_query($conn, $sql) or die("query failed");

        //  $row=mysqli_fetch_all($result);
        //   echo "<pre>";
        //  print_r($row);
        //   echo "<pre>";

        
        
         //for showing all values in mysqli_fetch_assoc() we use a while loop
        // while($row=mysqli_fetch_assoc($result)){

        //     echo "<pre>";
        //     print_r($row);
        //      echo "<pre>";
        //     echo $row['id'] . "<br>";
        //     echo $row['name']. "<br>";
        //     echo $row['city'];
        // }

/*
          $row=mysqli_fetch_row($result);
          echo "<pre>";
         print_r($row);
          echo "<pre>";
             echo $row[0] . "  <br>" .   $row[1];
             */

              // $row=mysqli_fetch_array($result,MYSQLI_BOTH);
              // echo "<pre>";
              //   print_r($row);
              // echo "</pre>";

              // $row=mysqli_fetch_all($result,MYSQLI_ASSOC);
              // echo "<pre>";
              //   print_r($row);
              // echo "</pre>";
              // foreach($row as $data){
              //   echo $data['id']. " " . $data['name']. " ". $data['age']. "<br> "; 
              // }
               
              // $row=mysqli_fetch_field($result);
              //     echo "<pre>";
              //     print_r($row);
              //     echo "</pre>";
                  while($field=mysqli_fetch_field($result)){
                    echo "<pre>";
                    print_r($field);
                    echo "</pre>";
                  }
?>