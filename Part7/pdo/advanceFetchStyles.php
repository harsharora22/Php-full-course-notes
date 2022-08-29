<?php
$dbname = "mysql:host=localhost;dbname=test";
$username = "root";
$password = "";
$conn = new PDO($dbname, $username, $password);
// $sql = $conn->prepare("SELECT * FROM users");
$sql = $conn->prepare("SELECT id,fname FROM users");
// echo $conn->exec($sql); Instead of select it will run
$sql->execute();
echo $sql->rowCount();
// echo $conn->lastInsertId();
// $result = $sql->fetchAll(PDO::FETCH_COLUMN, 1);
// $result = $sql->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
// $result = $sql->fetchAll(PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC);
// $result = $sql->fetchAll(PDO::FETCH_KEY_PAIR);
// $result = $sql->fetchAll(PDO::FETCH_CLASS);
// echo "<pre>";
// print_r($result);
// echo "</pre>";