<?php
// htm entities is used for to conert in encode the value
$str="a 'qoute' is <b>bold</b>";
echo $str . "<br><br>";
echo htmlentities($str , ENT_QUOTES) . "<br>";
echo html_entity_decode($str);
?>