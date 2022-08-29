<?php
$conn = mysqli_connect('localhost', 'root', '', 'student') or die("Connection failed");
$sql = 'SELECT * FROM personal';
$result = mysqli_query($conn, $sql) or die("Connection failed");
echo "Total rows:" . mysqli_affected_rows($conn);