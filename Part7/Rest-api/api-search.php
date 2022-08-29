<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
$data = json_decode(file_get_contents("php://input"), true);
// $search_term = $data['search'];
$search_term = isset($_GET['search']) ? $_GET['search'] : die();
include 'config.php';
$sql = "SELECT * FROM users WHERE fname LIKE '%{$search_term}%'";
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