
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    Email: <input type="text" name="email">
    <input type="submit" name="submit" placeholder='submit'>
  </form>
  <br>
    <?php
if (isset($_REQUEST['submit'])) {
    if (filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
        echo 'email is valid';
    } else {
        echo 'email is not valid';

    }
}
?>
</body>
</html>
