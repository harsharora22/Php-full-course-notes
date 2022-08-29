<?php
require "config.php";
$sql = "SELECT data.id, data.name, class.cname FROM data LEFT JOIN class ON class.cid = data.class";
$result = mysqli_query($conn, $sql);
$output = [];
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output[] = $row;

    }
} else {
    $output['empty'] = 'empty';
}
mysqli_close($conn);
echo json_encode($output);