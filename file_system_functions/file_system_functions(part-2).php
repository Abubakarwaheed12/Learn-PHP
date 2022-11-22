<?php
    
     $file=fopen('readme.txt', 'r');

      echo  fread($file, 20);
      echo filesize("readme.txt");
      echo filetype("readme.txt");
?>