<?php include "header.php";
if ( $_SESSION['role']=='0') {
    header("Location: {$url}/admin/post.php");
}
if (isset($_POST['submit'])) {
    include "connection.php";
    $userId = mysqli_real_escape_string($conn, $_POST['user_id']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    #$password = mysqli_real_escape_string($conn, sha1($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    $Usql = "UPDATE user SET first_name='{$fname}', last_name='{$lname}', username='{$username}', role='{$role}' WHERE user_id={$userId}";
    if (mysqli_query($conn, $Usql)) {
        header("Location: {$url}/admin/users.php");
    }
}

?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <?php
include 'connection.php';
$idofuser = $_GET['id'];
$Usql = "SELECT * FROM user WHERE user_id = {$idofuser}";
$result = mysqli_query($conn, $Usql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>
                  <form  action="<?php $_SERVER['PHP_SELF']?>" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="<?php echo $row['user_id'] ?>" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" value="<?php echo $row['first_name'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" value="<?php echo $row['last_name'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role'] ?>">
                          <?php
if ($row['role'] == 0) {
            echo '<option value="0" selected>normal User</option>
                                     <option value="1">Admin</option>';
        } else {
            echo '<option value="1" selected>Admin</option>
                                <option value="0">normal User</option>';
        }
        ?>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <?php
}
}?>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php";?>
