<?php
if(isset($_FILES['image'])){

    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    $file_name=$_FILES['image']['name'];
    $file_type=$_FILES['image']['type'];
     $file_tmp=$_FILES['image']['tmp_name'];

     if(move_uploaded_file($file_tmp, "uploaded images/".$file_name)){
         echo "uploaded";
     }else{
         echo "could not upload the file";
     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="image"><br><br>
            <input type="submit">
        </form>    

</body>
</html>