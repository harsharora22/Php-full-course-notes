<?php  
include "connection.php";
$cat_id=$_POST['cat_id'];
$cat_name=$_POST['cat_name'];
$sql = "UPDATE category SET category_name='{$cat_name}' WHERE category_id={$cat_id}";
if(mysqli_query($conn,$sql)){
  header("Location: {$url}/admin/category.php");
}else{
  echo "Couldn't Update";
}

?>