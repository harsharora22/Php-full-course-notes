<?php include 'header.php';

if (isset($_POST['deletebtn'])) {
    $conn = mysqli_connect('localhost', 'root', '', 'crud') or die("Connection Unsuccessfull");
    $inptId = $_POST['inptId'];
    $sql = "DELETE FROM data WHERE id = {$inptId}";
    $result = mysqli_query($conn, $sql) or die("Query failed");
    header("Location: http://localhost/phpYahooBaba/crud_html/index.php");
    mysqli_close($conn);
}

?>


<div id="main-content">
  <h2>Delete Record</h2>
  <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label>Id</label>
      <input type="text" name="inptId" />
    </div>
    <input class="submit" type="submit" name="deletebtn" value="Delete" />
  </form>
</div>
</div>
</body>

</html>