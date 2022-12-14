<?php
include 'config.php';
$page = basename($_SERVER['PHP_SELF']);
switch ($page) {
    case "single.php":
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql1 = "SELECT * FROM post WHERE post_id={$id}";
            $result1 = mysqli_query($conn, $sql1) or die("Connection failed");
            $row_title = mysqli_fetch_assoc($result1);
            $page_title = $row_title['title'];
        } else {
            $page_title = "No record found";
        }
        break;
    case "category.php":
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql1 = "SELECT * FROM category WHERE category_id={$id}";
            $result1 = mysqli_query($conn, $sql1) or die("Connection failed");
            $row_title = mysqli_fetch_assoc($result1);
            $page_title = $row_title['category_name'];
        } else {
            $page_title = "No record found";
        }
        break;
    case "author.php":
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql1 = "SELECT * FROM user WHERE user_id={$id}";
            $result1 = mysqli_query($conn, $sql1) or die("Connection failed");
            $row_title = mysqli_fetch_assoc($result1);
            $page_title = $row_title['username'];
        } else {
            $page_title = "No record found";
        }
        break;
    case "search.php":
        if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $page_title = $search;
            if ($search == '') {
                $page_title = 'Please enter a search term';
            }
        } else {
            $page_title = "No search result found";
        }
        break;
    default:
        $page_title = "News Zone";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $page_title; ?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Custom stlylesheet -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class=" col-md-offset-4 col-md-4">
                <a href="index.php" id="logo"><img src="images/news.jpg"></a>
            </div>
            <!-- /LOGO -->
        </div>
    </div>
</div>
<!-- /HEADER -->
<!-- Menu Bar -->
<div id="menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class='menu'>
                <li><a href='http://localhost/phpYahooBaba/news-project/'>Home</a></li>
                    <?php

if (isset($_GET['id'])) {
    $cid = $_GET['id'];
}

$sql = "SELECT * FROM category WHERE post > 0";
$result = mysqli_query($conn, $sql) or die("Query failed");
if (mysqli_num_rows($result) > 0) {
    $active = '';
    while ($row = mysqli_fetch_assoc($result)) {
        if (isset($_GET['id'])) {
            if ($row['category_id'] == $cid) {
                $active = 'active';
            } else {
                $active = '';
            }
        }

        ?>
                    <li><a class="<?php echo $active ?>" href='category.php?id=<?php echo $row['category_id'] ?>'><?php echo $row['category_name'] ?></a></li>

<?php }}?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /Menu Bar -->
