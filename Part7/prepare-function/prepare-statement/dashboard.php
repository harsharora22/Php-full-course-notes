<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Dashboard</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <div id="main">
      <div id="header" class="dashboard">
         <h1>Dashboard</h1>
      </div>
      <div id="content">
         <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname) or die("Connection failed." . $conn->connect_error);
$fname = "Believer";
$sql = $conn->prepare("SELECT * FROM users WHERE fname=?");
$sql->bind_param('s', $fname);
$sql->execute();
// $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
$sql->bind_result($id, $fname, $lname);
// echo "<pre>";
// print_r($result);
// echo "</pre>";
// while ($row = $result->fetch_assoc()) { // fetch_row will give give keys in 0,1,2,3 , fetch_object will return result in object form
//     //  echo "<pre>";
//     //  print_r($row);
//     //  echo "</pre>";
//     echo $row["id"] . ".  " . $row['fname'] . " - " . $row['lname'] . "<br>";
// }
$sql->fetch();
echo "$id - $fname - $lname  <br>";

?>
      </div>
   </div>
</body>

</html>