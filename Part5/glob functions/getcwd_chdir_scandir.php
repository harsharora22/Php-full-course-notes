<?php
// echo getcwd();
// chdir("css");
// echo getcwd();

$dir = ".";
echo "<pre>";
print_r(scandir($dir, 1));
echo "</pre>";