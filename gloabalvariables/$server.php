<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
</head>
<body>
 <div class="form">
     <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        name: <input type="text" name="fname"><br><br>
        age:  <input type="text" name="age"><br><br>
         <input type="submit" value="submit" name="save">
     </form>
 </div>    

    <?php
    if(isset($_POST['submit'])){
        echo $_POST['fname'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
    ?>
</body>
</html>