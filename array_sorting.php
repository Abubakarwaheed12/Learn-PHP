<?php
// array_sorting ma hum array ki sorting karty han jis eg> k pehly a waly character aaen
// acessinding order (A-Z) 
//deaccesssing oredr(Z-A)
// reververse order array ko ult karny k liye
$names=[
    "rehman",
    "shakhman",
    "rehan",
    "asad"
];

rsort($names);

echo "<pre>";
print_r($names);
echo "</pre>";
?>