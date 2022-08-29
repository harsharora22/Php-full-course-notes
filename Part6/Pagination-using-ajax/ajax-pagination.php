<?php
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection Failed");
$limit_per_page = 3;
$page = "";
if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit_per_page;
$sql = "SELECT * FROM users LIMIT {$offset},{$limit_per_page}";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output .= ' <table id="table" border="1" cellspacing="0" cellpadding="10px" width="40%">
                  <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                  </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                    <td>{$row["id"]}.</td>
                    <td>{$row["fname"]}</td>
                    <td>{$row["lname"]}</td>
                    </tr>";
    }
    $output .= "</table>";
    $sql1 = "SELECT * FROM users";
    $result1 = mysqli_query($conn, $sql1) or die("SQL Query Failed.");
    $total_records = mysqli_num_rows($result1);
    $total_pages = ceil($total_records / $limit_per_page);
    $output .= '<div id="pagination">';

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i == $page) {
            $class_active = "active";
        } else {
            $class_active = "";
        }
        $output .= "<a href='' class='{$class_active}' id='{$i}'>{$i}</a>";
    }
    $output .= '</div>';
    echo $output;
} else {
    echo "<h2>No record found.</h2>";
}