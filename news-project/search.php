<?php include 'header.php';?>
<div id="main-content">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <!-- post-container -->

        <div class="post-container">
          <!-- <h2 class="page-heading">Search : Search Term</h2> -->
          <?php
if (isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
}
?>
          <h2 class='page-heading'>Search Term: <?php echo strtoupper($search) ?></h2>
          <?php
include 'config.php';
$limit = 3;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit;
$Ssql = "SELECT post.post_id,post.title,post.description,post.post_date,category.category_name,user.username,post.category,post.post_img FROM post
LEFT JOIN category ON post.category = category.category_id
LEFT JOIN user ON post.author = user.user_id
WHERE post.title LIKE '%{$search}%' OR post.description LIKE '%{$search}%'
ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";
$result = mysqli_query($conn, $Ssql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        ?>
          <div class="post-content">
            <div class="row">
              <div class="col-md-4">
                <a class="post-img" href="single.php?id=<?php echo $row['post_id'] ?>"><img
                    src="./admin/upload/<?php echo $row['post_img'] ?>" alt="" /></a>
              </div>
              <div class="col-md-8">
                <div class="inner-content clearfix">
                  <h3><a href='single.php?id=<?php echo $row['post_id'] ?>'><?php echo $row['title'] ?></a></h3>
                  <div class="post-information">
                    <span>
                      <i class="fa fa-tags" aria-hidden="true"></i>
                      <a href='category.php'><?php echo $row['category_name'] ?></a>
                    </span>
                    <span>
                      <i class="fa fa-user" aria-hidden="true"></i>
                      <a href='author.php?id=<?php echo $row['author'] ?>'><?php echo $row['username'] ?></a>
                    </span>
                    <span>
                      <i class="fa fa-calendar" aria-hidden="true"></i>
                      <?php echo $row['post_date'] ?>
                    </span>
                  </div>
                  <p class="description">
                    <?php echo substr($row['description'], 0, 50) . '...' ?>
                  </p>
                  <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id'] ?>'>read more</a>
                </div>
              </div>
            </div>
          </div>

          <?php }
} else {
    echo "<h2>No record found.</h2>";
}

$sql = "SELECT * FROM post
WHERE post.author LIKE '%{$search}%'";
$result1 = mysqli_query($conn, $sql) or die("Query Failed");
if (mysqli_num_rows($result1) > 0) {
    $totalRecords = mysqli_num_rows($result);

    $totalPages = ceil($totalRecords / $limit);
    echo "<ul class='pagination admin-pagination'>";
    if ($page > 1) {
        echo "<li><a href='author.php?search={$search} & page=" . ($page - 1) . "'> &#8592 </a></li>";
    }
    for ($i = 1; $i <= $totalPages; $i++) {
        if ($i == $page) {
            $active = "active";
        } else {
            $active = "";
        }
        echo "<li class={$active}><a href='author.php?search={$search} & page={$i}'>{$i}</a></li>";
    }
    if ($totalPages > $page) {
        echo "<li><a href='author.php?search={$search} & page=" . ($page + 1) . "'>  &#8594 </a></li>";
    }
    echo "</ul>";
}
?>
        </div>
      </div><!-- /post-container -->
      <?php include 'sidebar.php';?>
    </div>
  </div>
</div>

<?php include 'footer.php';?>