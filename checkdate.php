<?php
echo checkdate(2,15,2024) . "<br>";
$date1=date_create("2/15/2020");
$date2=date_create("9/12/2025");
$diff= date_diff($date1, $date2);
echo "<pre>";
print_r($diff);
echo "/<pre>";
?>