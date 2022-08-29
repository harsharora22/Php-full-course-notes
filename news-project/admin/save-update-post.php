<?php
include "connection.php";
if (empty($_FILES['new-image']['name'])) {
    $newname = $_POST['old-image'];
} else {
    $errors = array();
    $filename = $_FILES['new-image']['name'];
    $filesize = $_FILES['new-image']['size'];
    $filetmp = $_FILES['new-image']['tmp_name'];
    $filetype = $_FILES['new-image']['type'];
    $fileext = end(explode('.', $filename));
    $extentions = ['jpeg', 'jpg', 'png'];
    if (in_array($fileext, $extentions) === false) {
        $errors[] = "This extension file is not allowed, Please choose 'jpg','png' file";
    }
    if ($filesize > 2097152) {
        $errors[] = "File size must be lower than 2mb";
    }
    $newname = time() . '-' . basename($filename);
    $target = "upload/" . $newname;
    $img_name = $newname;
    if (empty($errors) == true) {
        move_uploaded_file($filetmp, $target);

    } else {
        print_r($errors);
        die();
    }
}
$post_id = $_POST['post_id'];
$post_title = $_POST['post_title'];
$postdesc = $_POST['postdesc'];
$category = $_POST['category'];

$sql = "UPDATE post SET title='{$post_title}',description='{$postdesc}',category={$category},post_img='{$img_name}' WHERE post_id={$post_id};";
if ($_POST['old_category'] != $category) {
    $sql .= "UPDATE category SET post =post-1 WHERE category_id={$_POST['old_category']};";
    $sql .= "UPDATE category SET post =post+1 WHERE category_id={$category};";
}
$result = mysqli_multi_query($conn, $sql);
if ($result) {
    header("Location:{$url}/admin/post.php");
} else {
    echo "Something went wrong";
}
