<?php
//in this exeecise we will cover if-else-if statement in php
$marks=80;
if($marks>=80){
    echo "merit";
}
elseif($marks>=60 && $marks<=79){
    echo "1st devision";
}
elseif($marks>=45 && $marks<=59){
    echo "2st devision";
}
elseif($marks>=33 && $marks<=44){
    echo "3st devision";
}
else{
    "you are fail";
}
?>