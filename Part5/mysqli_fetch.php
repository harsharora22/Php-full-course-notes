<?php
$conn = mysqli_connect('localhost', 'root', '', 'student') or die("Connection failed");
$sql = "SELECT * FROM personal";
$result = mysqli_query($conn, $sql) or die("Query failed");
// $row = mysqli_fetch_assoc($result);
// $row = mysqli_fetch_row($result);
// $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo "<pre>";
print_r($row);
echo "</pre>";
echo "<br>";
foreach ($row as $data) {
    echo $data['id'] . " " . $data['name'] . "<br>";
}
// echo $row['id'];
// echo $row[1];