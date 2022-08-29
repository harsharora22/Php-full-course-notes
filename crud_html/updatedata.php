<?php
$id = $_POST['id'];
$Name = $_POST['name'];
$Address = $_POST['address'];
$Class = $_POST['class'];
$Phone = $_POST['phone'];

$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection unsuccessfull.");
$sql = "UPDATE data SET name='{$Name}',address='{$Address}',class='{$Class}',phone='{$Phone}' WHERE id={$id}";
$result = mysqli_query($conn, $sql) or die("Query failed");

header("Location: http://localhost/phpYahooBaba/crud_html/index.php");
mysqli_close($conn);