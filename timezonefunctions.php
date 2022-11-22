<?php
echo date_default_timezone_get() . "<br>";
echo date_default_timezone_set("Asia/Karachi") . "<br>";
$tz = timezone_open("Asia/Karachi");
echo timezone_name_get($tz);

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre><br>";
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
