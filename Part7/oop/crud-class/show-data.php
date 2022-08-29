<?php include "database.php";
$obj = new database();
$obj->select("users", "*", null, null, null, 3);
$result = $obj->getResult();

echo "<table border='1' width='500px' cellpadding='10px' cellspacing='0'>
<tr><th>Sno.</th><th>Firstname</th><th>Lastname</th></tr>";
foreach ($result as list("id" => $id, "fname" => $fname, "lname" => $lname)) {
    echo "  <tr>
<td>$id.</td><td>$fname</td><td>$lname</td></tr>";

}

echo "</table>";
echo $obj->pagination("users", null, null, 3);