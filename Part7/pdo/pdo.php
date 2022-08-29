<?php
$db_name = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);
$sql = $conn->query("SELECT * FROM users");
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";
if (count($result)) {
    foreach ($result as $row) {
        echo "{$row['id']}-{$row['fname']}-{$row['lname']} <br>";
    }
} else {
    echo "No record found";
}

// while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
//    //  echo "<pre>";
//    //  print_r($row);
//    //  echo "</pre>";
// }