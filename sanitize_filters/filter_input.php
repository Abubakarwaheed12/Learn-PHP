<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter input</title>
</head>
<body>
     <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
     E-MAIL: 
     <input type="email" name="email" autocomplete="off">
      <input type="button" value="button" name="submit">
    </form>
<br>
            <?php
            if(isset($_REQUEST['submit'])){
                // echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
            if(filter_input(INPUT_GET,"email", FILTER_VALIDATE_EMAIL)){
                echo "email is valid";
            }else{
                echo "email is not valid";
            }
            }

        ?>
</body>
</html>