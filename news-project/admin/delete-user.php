<?php  
include 'connection.php';
$userId = $_GET['id'];
$Dsql = "DELETE FROM user WHERE user_id = {$userId}";
if(mysqli_query($conn,$Dsql)){
  header("Location: {$url}/admin/users.php");
}else{
  echo "<p style='font-family: sans-serif,arial,Helvetica;color:red;font-size:20px;margin:10px;'>Can't delete the user record</p>";
}
mysqli_close($conn);
?>