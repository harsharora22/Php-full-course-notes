<?php
include 'connection.php';
if (isset($_FILES['fileToUpload'])) {
    $errors = array();
    $filename = $_FILES['fileToUpload']['name'];
    $filesize = $_FILES['fileToUpload']['size'];
    $filetmp = $_FILES['fileToUpload']['tmp_name'];
    $filetype = $_FILES['fileToUpload']['type'];
    $fileext = end(explode('.', $filename));
    $extentions = ['jpeg', 'jpg', 'png'];
    if (in_array($fileext, $extentions) === false) {
        $errors[] = "This extension file is not allowed, Please choose 'jpg','png' file";
    }
    if ($filesize > 2097152) {
        $errors[] = "File size must be lower than 2mb";
    }
    $newname = "time() . "-" . basename($filename)";
    $target = "upload/" .$newname;
    if (empty($errors) == true) {
        move_uploaded_file($filetmp, $target);

    } else {
        print_r($errors);
        die();
    }
}
session_start();
$title = mysqli_real_escape_string($conn, $_POST['post_title']);
$postdesc = mysqli_real_escape_string($conn, $_POST['postdesc']);
$category = mysqli_real_escape_string($conn, $_POST['category']);
$date = date("d M, Y");
$author = $_SESSION['userid'];

$sql = "INSERT INTO post(title,description,category,post_date,author,post_img)
         VALUES ('{$title}','{$postdesc}','{$category}','{$date}',{$author},'{$newname}');";
$sql .= "UPDATE category SET post = post + 1 WHERE category_id={$category}";
if (mysqli_multi_query($conn, $sql)) {
    header("Location: {$url}/admin/post.php");
} else {
    echo '<div class="alert alert-danger">Query Failed</div>';
}
