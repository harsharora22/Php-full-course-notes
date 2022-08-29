<?php

// $arr = glob("*");
// foreach ($arr as $value) {
//     echo "{$value} size: " . filesize($value) . "<br>";
// }
echo "<pre>";
print_r(glob('{*html,*txt}', GLOB_BRACE));
echo "</pre>";