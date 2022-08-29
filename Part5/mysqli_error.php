<?php
$conn = mysqli_connect('localhost', 'root', '', 'student');
if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
    // die("Connection failed:".mysqli_connect_errno());
}
$sql = "SELECT * FROM personall";
// $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_error($conn));
$result = mysqli_query($conn, $sql);
mysqli_error_list($conn);
die();
$row = mysqli_fetch_assoc($result);
echo "<pre>";
print_r($row);
echo "</pre>";