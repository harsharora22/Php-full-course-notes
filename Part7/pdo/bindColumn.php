<?php
$dbname = "mysql:host=localhost;dbname=student";
$username = "root";
$password = "";
$conn = new PDO($dbname, $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = $conn->prepare("SELECT name,age FROM personal");
$sql->execute();
// $sql->bindColumn("name", $nm);
// $sql->bindColumn("age", $age);
$sql->bindColumn(1, $nm);
$sql->bindColumn(2, $age);

while ($sql->fetch()) {
    echo "{$nm} ---- {$age}<br>";
}