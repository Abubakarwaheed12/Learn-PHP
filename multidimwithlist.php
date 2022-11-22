<?php

$emp=[
    [1,"ahmad", "manager", 12000],
    [2,"ayan", "saleman", 10000],
    [3,"saad", "operator", 12000],
    [4,"ali", "office boy", 1200]
];

echo "<table border='1px'  'cellpadding='5px' cellspacing='0px'>
<tr>
<th>ID</th> 
<th>NAME</th> 
<th>DESIGNATION</th> 
<th>SALARY</th> 
</tr>
";
foreach($emp as list($id, $name, $designation, $salary)){
    echo "<tr> <td border='0px'> $id </td> <td> $name </td> <td> $designation </td> <td> $salary </td> </tr>"; 
}
echo "</table>";

?>