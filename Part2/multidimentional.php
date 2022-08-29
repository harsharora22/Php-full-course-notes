<?php
// multidimentional array or nested array
$emp = [
    [1, "Harsh arora", "Web developer", 50000],
    [2, "Ram", "App developer", 40000],
    [3, "Sham", "Software developer", 20000],
];
// echo $emp[1][3];

// for loop
// for($row=0;$row<3;$row++){
//   for($col=0;$col<4;$col++){
//     echo $emp[$row][$col]." ";
//   }
//   echo "<br>";
// }

// for each
echo "<table border='2px' cellpadding='9px' cellspacing='0px'>";
echo "<tr>
        <th>Emp Id</th>
        <th>Emp Name</th>
        <th>Emp Designation</th>
        <th>Emp Salary</th>
     </tr>";
foreach ($emp as $rows) {
    echo "<tr>";
    foreach ($rows as $col) {
        echo "<td>$col</td>";
    }
    echo "</tr>";
}
echo "<table>";
// echo "<pre>";
// echo print_r($emp);
// echo "</pre>";