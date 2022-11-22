<?php
$emp=[
    [1, "salman", "manager", 50000],
    [2, "baba", "sales operator", 20000],
    [3, "yahoo", "operator", 15000],
    [4, "amir", "driver", 5000]
];
// print with for loop
 
for($row=0; $row<4; $row++){
    for($col=0; $col<4; $col++){
            echo $emp[$row][$col] . "  ";
    }
    echo "  <br>";
}

//with foreach loop
echo "<table border='1px solid'>";

foreach($emp as $v1){
   echo "<tr>";
    foreach($v1 as $v2){
        echo "<td>" . $v2 . " <td>";
    }
    echo "</tr>";
}
echo "</table>";
// echo $emp[0][0] . " ";
// echo $emp[0][1]  . " ";
// echo $emp[0][2]  . " ";
// echo $emp[0][3]  . "<br>";

//  print_r($emp);

?>