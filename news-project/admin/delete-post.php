<?php
include 'connection.php';
$postId = $_GET['id'];
$catId = $_GET['catId'];
$sql1 = "SELECT * FROM post WHERE post_id={$postId}";
$result = mysqli_query($conn,$sql1) or die("Query Failed");
$row = mysqli_fetch_assoc($result) or die("Something went worong");
if($row){
  unlink("upload/".$row['post_img']);
}


$sql = "DELETE FROM post WHERE post_id={$postId};";
$sql .= "UPDATE category SET post=post - 1 WHERE category_id={$catId}";
if(mysqli_multi_query($conn, $sql)){
  header("Location: {$url}/admin/post.php");
}else{
  "Something went wrong";
}

