<?php
echo $id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "", "test") or die("Connection failed");
$result = mysqli_query($conn, "SELECT * FROM users WHERE id={$id}");
$output = "";
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output = "
        <tr>
        <td>First Name</td>
        <td><input type='text' id='edit-fname' value='{$row["fname"]}'></td>
      </tr>
      <tr>
        <td>Last Name</td>
        <td><input type='text' id='edit-lname' value='{$row["lname"]}'></td>
      </tr>
      <tr>
        <td><input type='submit' id='edit-submit' data-uid='{$row['id']}' value='save'></td>
      </tr>";
    }

    mysqli_close($conn);
    echo $output;
} else {
    echo "Failed.";
}