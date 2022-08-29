<?php
$conn = mysqli_connect('localhost', 'root', '', 'test');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$jsonData = json_encode($output, JSON_PRETTY_PRINT);
$jsonName = "my-" . date("d-m-Y") . ".json";
if (file_put_contents($jsonName, $jsonData)) {
    echo $jsonName . " file created";
} else {
    echo "Cann't created";
}