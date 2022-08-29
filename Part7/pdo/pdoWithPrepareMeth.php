<?php
$db_name = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";
$conn = new PDO($db_name, $username, $password);
$a = "HARSH";
$n = 2;
$sql = $conn->prepare("SELECT * FROM users WHERE fname=:fn OR id=:id");
// $sql->bindParam(1, $a, PDO::PARAM_STR);
// $sql->bindValue(2, $n, PDO::PARAM_INT);
// $sql->bindParam(':fn', $a, PDO::PARAM_STR);
// $sql->bindValue(':id', $n, PDO::PARAM_INT);
// $sql->execute(array($a, $n));
$sql->execute(array(':fn' => $a, ':id' => $n));
$result = $sql->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";