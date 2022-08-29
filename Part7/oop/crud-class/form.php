<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
   .container {
      height: 100vh;
      width: 100%;
      background: #ccc;
      display: flex;
      align-items: center;
      justify-content: center;
   }
   </style>
</head>

<body>
   <div class="container">
      <form action="save-data.php" method="post">
         <label for="fname">First Name</label>
         <input type="text" name="fname" id="fname"><br><br>
         <label for="lname">Last Name</label>
         <input type="text" name="lname" id="lname"><br><br>
         <input type="submit" value="Submit" name="submit">
      </form>
   </div>
</body>

</html>