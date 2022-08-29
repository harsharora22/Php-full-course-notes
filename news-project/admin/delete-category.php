<?php  
include "connection.php";
$catId=$_GET['id'];
$sql = "DELETE FROM category WHERE category_id={$catId}";
if(mysqli_query($conn,$sql)){
  header("Location: {$url}/admin/category.php");
}else{
  echo "Couldn't deleted";
}
?>