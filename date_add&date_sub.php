<?php
// date_add();
// date_sub();
// date_modify();
echo "<b>ADD</b> <br>";
$date=date_create("05-02-2012");
echo date_format($date, "d/m/Y") . "<br>";
date_add($date, date_interval_create_from_date_string("30 days"));
echo date_format($date, "d/m/Y") . "<br>";

echo "<b>SUB</b> <br>";
        $date=date_create("05-02-2012");
    echo date_format($date, "d/m/Y") . "<br>";
    date_sub($date, date_interval_create_from_date_string("30 days"));
    echo date_format($date, "d/m/Y") . "<br>";

    echo "<h1>MODIFY</h1> <br>";
        $date=date_create("05-02-2012");
    echo date_format($date, "d/m/Y") . "<br>";
    date_modify($date, "20 days");
    echo date_format($date, "d/m/Y") . "<br>";

    echo "<pre><b><center> ALL THE CODE WORKS FINELY </center> </b></pre>"
?>