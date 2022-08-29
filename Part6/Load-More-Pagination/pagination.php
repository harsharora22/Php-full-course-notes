<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");
$limit_per_page = 3;
$page = "";
if (isset($_POST['pageNo'])) {
    $page = $_POST['pageNo'];
} else {
    $page = 0;
}

$sql = "SELECT * FROM users LIMIT {$page},{$limit_per_page}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
if (mysqli_num_rows($result) > 0) {
    $output = "";
    $output .= "<tbody>";
    while ($row = mysqli_fetch_assoc($result)) {
        $last_id = $row["id"];
        $output .= "<tr>
      <td>{$row["id"]}.</td>
      <td>{$row["fname"]}</td>
      <td>{$row["lname"]}</td>
      </tr>";
    }
    $output .= "</tbody>
    <tbody id='pagination'>
  <tr>
    <td colspan='2'>
      <button id='ajaxbtn' data-pid='{$last_id}'>View More</button>
    </td>
  </tr>
  </tbody>";
    echo $output;
}
//  else {
//     echo "No record found.";
// }
mysqli_close($conn);