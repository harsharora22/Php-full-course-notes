<?php  
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// echo $_REQUEST['name'];
// echo $_REQUEST['age'];
echo $_SERVER['PHP_SELF'].'<br>';
echo $_SERVER['HTTP_HOST'];
?>