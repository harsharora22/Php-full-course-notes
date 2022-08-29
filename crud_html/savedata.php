<?php
$Name = $_POST['name'];
$Address = $_POST['address'];
$Class = $_POST['class'];
$Phone = $_POST['phone'];

$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection unsuccessfull.");
$sql = "INSERT INTO data(name,address,class,phone) VALUES ('{$Name}','{$Address}','{$Class}','{$Phone}')";
$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/phpYahooBaba/crud_html/index.php");
mysqli_close($conn);