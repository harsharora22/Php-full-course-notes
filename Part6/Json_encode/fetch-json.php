<?php
// $id = $_POST['id'];
$conn = mysqli_connect('localhost', 'root', '', 'test');
// $sql = "SELECT * FROM users WHERE id={$id}";
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($output);