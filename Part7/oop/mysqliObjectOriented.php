<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$db_name = "test";
$conn = new mysqli($server_name, $user_name, $password, $db_name);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['fname'] . " " . $row['lname'] . "<br>";
    }
} else {
    echo "No result found.";
}
$conn->close();