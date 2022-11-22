<?php
    //   echo  readfile("readme.txt");
       
      $file="readme.txt";
           echo filesize($file) . "<br>";
           echo filetype($file) . "<br>";
           $path=realpath($file) ;
           echo "<pre>";
            print_r(pathinfo($path));
           echo "</pre>";
            echo basename($path , ".txt");
           
            echo dirname($path , 3 );


      if(file_exists($file)){
        //   echo "file exist <br>";
        // echo  readfile("readme.txt");
         
        // copy($file , "newfile.txt");
        //  rename("newfile.txt" , "oldfile.txt");
        unlink("oldfile.txt");

      }else{
          echo "file doesn't exist";
      }
   
        if(file_exists("textfiles")){
            rmdir("textfiles");
        }else{
            echo "File doesn't Exists";
        }
       
?>