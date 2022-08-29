<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Page</title>
</head>

<body>
  <form action="<?php  echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name: <input type="text" name="name"><br><br>
    Age: <input type="text" name="age"><br><br>
    <input type="submit" name="save">
  </form>
  <?php  
  if(isset($_POST['save'])){
    echo "Name is : ".$_POST['name'].'<br>';
    echo "Age is : ".$_POST['age'].'<br>';
  }
  ?>
</body>

</html>