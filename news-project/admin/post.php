<?php include "header.php";?>
<div id="admin-content">
  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1 class="admin-heading">All Posts</h1>
      </div>
      <div class="col-md-2">
        <a class="add-new" href="add-post.php">add post</a>
      </div>
      <div class="col-md-12">
        <?php include "connection.php";
$limit = 3;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit;
if ($_SESSION['role'] == '1') {
    $Ssql = "SELECT post.post_id,post.title,post.description,post.post_date,category.category_name,user.username,post.category FROM post
    LEFT JOIN category ON post.category = category.category_id
    LEFT JOIN user ON post.author = user.user_id
    ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
} elseif ($_SESSION['role'] == '0') {
    $Ssql = "SELECT post.post_id,post.title,post.description,post.post_date,category.category_name,user.username,post.category FROM post
    LEFT JOIN category ON post.category = category.category_id
    LEFT JOIN user ON post.author = user.user_id
    WHERE post.author={$_SESSION['userid']}
    ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
}
$result = mysqli_query($conn, $Ssql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {

    ?>
        <table class="content-table">

          <thead>
            <th>S.No.</th>
            <th>Title</th>
            <th>Category</th>
            <th>Date</th>
            <th>Author</th>
            <th>Edit</th>
            <th>Delete</th>
          </thead>
          <tbody>
            <?php
$serial = $offset + 1;
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
              <td class='id'><?php echo $serial; ?></td>
              <td><?php echo $row['title'] ?></td>
              <td><?php echo $row['category_name'] ?></td>
              <td><?php echo $row['post_date'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td class='edit'><a href='update-post.php?id=<?php echo $row['post_id'] ?>'><i class='fa fa-edit'></i></a>
              </td>
              <td class='delete'><a
                  href='delete-post.php?id=<?php echo $row['post_id'] ?>&catId=<?php echo $row['category'] ?>'><i
                    class='fa fa-trash-o'></i></a></td>
            </tr>
            <?php
$serial++;
    }?>
          </tbody>
        </table>
        <?php } else {
    echo "<p>No user found";

}

$sql = "SELECT * FROM post";
$result1 = mysqli_query($conn, $sql) or die("Query Failed");
if (mysqli_num_rows($result1) > 0) {
    $totalRecords = mysqli_num_rows($result1);

    $totalPages = ceil($totalRecords / $limit);
    echo "<ul class='pagination admin-pagination'>";
    if ($page > 1) {
        echo "<li><a href='post.php?page=" . ($page - 1) . "'> &#8592 </a></li>";
    }
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            $active = "active";
        } else {
            $active = "";
        }
        echo "<li class={$active}><a href='post.php?page={$i}'>{$i}</a></li>";
    }
    if ($totalPages > $page) {
        echo "<li><a href='post.php?page=" . ($page + 1) . "'>  &#8594 </a></li>";
    }
    echo "</ul>";
}
?>
      </div>
    </div>
  </div>
</div>
<?php include "footer.php";?>