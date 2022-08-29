<?php
$id = $_GET['id'];
$conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection failed");
$sql = "DELETE FROM data WHERE id={$id}";
$result = mysqli_query($conn, $sql) or die("Query failesd");
header("Location: http://localhost/phpYahooBaba/crud_html/index.php");
mysqli_close($conn);