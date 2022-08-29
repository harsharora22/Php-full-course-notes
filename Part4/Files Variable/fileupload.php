<?php
if (isset($_FILES['img'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";
    echo $file_name = $_FILES['img']['name'] . "<br>";
    echo $file_type = $_FILES['img']['type'] . "<br>";
    echo $file_tmp_name = $_FILES['img']['tmp_name'] . "<br>";
    echo $file_size = $_FILES['img']['size'] . "<br>";
    if (move_uploaded_file($file_tmp_name, 'upload-images/' . $file_name)) {
        echo "Successfully uploaded!";
    } else {
        echo "Could'nt upload the file!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="#" method="post" enctype="multipart/form-data">
    <input type="file" name="img"><br><br>
    <input type="submit">
  </form>
</body>

</html>