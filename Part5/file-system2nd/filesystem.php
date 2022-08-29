<?php
// $file = fopen("readme.txt", 'r');
// echo fread($file, filesize("readme.txt"));
// echo fgets($file);
// echo ftell($file);
// // fseek($file, 5);
// echo "<br>";
// // echo fgets($file);
// rewind($file);
// echo fpassthru($file);
// while (!feof($file)) {
//     $line = fgets($file);
//     echo $line . '<br>';
// }
// echo fgetc($file);
// echo '<pre>';
// print_r(file('readme.txt'));
// echo '</pre>';

$file = fopen("readme.txt", 'a+'); // r+ remove only first charchters and overwrite the content & w+ romove all the content and overwrite & a+ write text in the end
// echo fwrite($file, "\nHere is new"); // fwrite & fputs are same functions

ftruncate($file, 100); // delete data in file
fclose($file);