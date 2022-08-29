<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"), true);
$id = $data['sid'];
include 'config.php';
$sql = "SELECT * FROM users WHERE id={$id}";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output, JSON_PRETTY_PRINT);
} else {
    echo (json_encode([
        'message' => 'No record found.',
        'status' => false,
    ]));
}