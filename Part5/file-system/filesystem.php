<?php
$file = "readme.txt";
// if (!file_exists('mkdirFolder')) {
//     mkdir("mkdirFolder"); // make directory
// } else {
//     echo "File already exists";
// }
// if (file_exists('mkdirFolder')) {
//     rmdir("mkdirFolder"); // make directory
// } else {
//     echo "File already removed";
// }

// echo filesize($file);
// echo filetype($file);
// echo realpath($file);
$path = realpath($file);
echo "<pre>";
// print_r(pathinfo($path, PATHINFO_DIRNAME));
// print_r(basename($path, '.txt'));
echo "</pre>";

// if (file_exists($file)) {
//     // echo readfile("readme.txt");
//     // copy($file, "newfile.txt");
//     // echo readfile("newfile.txt");
//     // echo rename("newfile.txt", "renamedfile.txt");
//     // unlink("renamedfile.txt");
//     // delete("renamedfile.txt");

// } else {
//     echo "File not found";
// }
