<?php
// if (is_file("readme.txt")) {
//     echo readfile("readme.txt");
// } else {
//     echo "No file found.";
// }
// if (is_dir("folder")) {
//     echo "Folder found";
// } else {
//     echo "No folder found.";
// }
// if (is_writable("readme.txt")) {
//     echo "writeable";
// } else {
//     echo "Not writeable";
// }
// if (is_readable("readme.txt")) {
//     echo "readable";
// } else {
//     echo "Not readable";
// }
if (is_executable("readme.txt")) {
    echo "is_executable";
} else {
    echo "Not executable";
}