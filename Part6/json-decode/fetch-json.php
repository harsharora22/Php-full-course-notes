<?php
$jsonfilename = "data.json";
$jsonData = file_get_contents($jsonfilename);
$arr = json_decode($jsonData, true);
// echo "<pre>";
// print_r($arr);
// echo "</pre>";
echo '<table border="1" cellpadding="10px" cellspacing="0" width="40%">';
foreach ($arr as list("userId" => $id, "userName" => $userName, "about" => $about)) {
    echo "<tr><td>{$id}</td><td>{$userName}</td><td>{$about}</td></tr>";
}
echo '</table>';